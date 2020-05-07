var cart = {}; // корзина

function init() {
    var hash = window.location.hash.substring(1);
        console.log(hash);
    $.post(
        "admin/core.php",
        {
            "action" : "loadSingleGoods",
            "id" : hash
        },
        goodsOut
    );
}


function goodsOut(data) {
    // вывод на страницу
    data = JSON.parse(data);
    var out='';
    
    // навигация
    

    out += '<div class="container">';
    out += '<div class="row">';
    out += `<h2 class="name">${data.name}</h2>`;
    out += '<div class="col-sm-12">';
    out += '<ul class="nav nav-tabs"><li><a href="#details" data-toggle="tab">Детали</a></li><li><a href="#companyprofile" data-toggle="tab">Профиль Компании</a></li><li><a href="#tag" data-toggle="tab">Тег</a></li><li class="active"><a href="#reviews" data-toggle="tab">Отзывы (5)</a></li></ul></div>';
    out += '<div class="tab-content"><div class="tab-pane fade" id="details"></div></div>'; // 
    // Сторынка товару

    out += ' <div class="col-sm-offset-1 col-sm-4 product-details" >';
    out += `<img src="images/${data.img}" alt="" style="position: relative; 
     right: -25%;margin-top:10px;margin-bottom:15px;">`;
    out += '  <img src="images/product-details/new.jpg"class="newarrival" alt=""/>';
    // блоки слайду
    out += '<div class="info-slide"><div class="block-slide ">1</div><div class="block-slide ">1</div><div class="block-slide ">1</div></div></div>';
    // конец левой части
    // опис
    out += ' <div class="col-sm-offset-1 col-sm-5 product-information">';    
    out +=`<h2 class="name">${data.name}</h2>`;
    out += `<p>WebID: ${data.id}</p>`;
    out += '<img src="images/product-details/rating.png" alt=""style="display: block;"/>';
    out += '<span><span>';
    out += `<div class="cost">${data.cost}UAH</div>`;
    out += '</span><button  class="btn btn-default add-to-cart" data-id="${data.id}"><i class="fa fa-shopping-cart"></i>Купить</button>'; 
    // later
    out += `<button  class="btn btn-default later" data-id="${data.id}"><i class="fa fa-heart"></i></button>`;
    out +=`</span>`;
    out += `</p><p><b>Состояние: </b> В наличии</p><p>`;
    out += '<p><b>undefined data :придумаем</b>'; 
    out += `<p>Категория: ${data.сategori}</p>`;
    out += `<b> Brand:</b> ${ data.brand }</p>`;
    out += '</div><!--/product-information-->';//-2
    // описание
    out +=' <div class="col-sm-offset-1 col-sm-5 good-descr">'; 
    out +='<h1>Описание:</h1>'; 
    out += `<p >${data.fulldescr}</p></div>`; 
    // out +='</div></div></div>'; 
    // характеристики
    out += ' <div class="col-sm-5 good-descr">';
    out += '<h1>Характеристики :</h1>';
    out += '<p>Дисплей:</p><ul><li>Диагональ экрана:</li><li>Разрешение дисплея:</li><li>Тип матрицы:</li><li>Количество точек касания:</li><li>Материал экрана:</li></ul></div>'; 
    // out +=' <div class="col-sm-10">'; 
    // out +='<h1 class="text-center">Отзывы :</h1></div>'; 
    // out +='</div></div></div>'; 
    // конец правой части закрыват контейнер

    $('.goods-out').html(out);
    $('.add-to-cart').on('click', addToCart);
    $('.later').on('click', addToLater);
}
function addToLater(){
    var later = {};
    if (localStorage.getItem('later')) {
        // если есть - расширфровываю и записываю в переменную cart
        later = JSON.parse(localStorage.getItem('later'));
    }
    alert('Добавлено в Бажання');
    var id = $(this).attr('data-id');
    later[id] = 1;
    localStorage.setItem('later', JSON.stringify(later));
}
function addToCart() {
    //добавляем товар в корзину
    var id = $(this).attr('data-id');
    // console.log(id);
    if (cart[id]==undefined) {
        cart[id] = 1; //если в корзине нет товара - делаем равным 1
    }
    else {
        cart[id]++; //если такой товар есть - увеличиваю на единицу
    }
    showMiniCart();
    saveCart();
}

function saveCart() {
    //сохраняю корзину в localStorage
    localStorage.setItem('cart', JSON.stringify(cart)); //корзину в строку
}

function showMiniCart() {
    //показываю мини корзину
    var out="";
    for (var key in cart) {
        out += key +' --- '+ cart[key]+'<br>';
    }
    $('.mini-cart').html(out);
}

function loadCart() {
    //проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('cart')) {
        // если есть - расширфровываю и записываю в переменную cart
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}

$(document).ready(function () {
    init();
    loadCart();
});
