var cart = {}; // корзина

// toString(1);
function init() {
    var hash = window.location.hash.match(/#(\w+)/)[1];
        console.log(hash);
    $.post(
        "admin/core.php",
        {
            "action": "selectOneCategory",
           "category" : hash 
        },
        goodsOut
    );
}
// var category = $(this).attr('data-category');
//     for (var i=0; i <= category.length in data ){

//     }
 // for (var category in data = category[key]<= category.length , category++){} 
function goodsOut(data) {
    // вывод на страницу
    data = JSON.parse(data);
//    var res = {};
    var out='';
    for (var key in data) {
                    // var goodsItem = data[key];
                    // var categoryName = goodsItem.category ;
                    // if (!res[categoryName]){
                    //     res[categoryName] = [];
                    // }
                    // res[categoryName].push(goodsItem);
        out += ' <div class="col-sm-4"> ';
         out += '<div class="product-image-wrapper"> ';
          out += '<div class="single-products">';
           out += '<div class="single-goods">';
            out += '<div class="productinfo text-center">';
                out += `<button  class="btn btn-default later" data-id="${key}"><i class="fa fa-heart"></i></button>`;
        out += `<img src="images/product-details/${data[key].img}">`;
                out += `<h4 class="good-name"><a href="goods#${key}">${data[key].name}</a></h4>`;
            // out += `<p class="description">${data[key]['description']}</p>`;
                out += `<p><b>В наличии</b></p><p>`;
                out += `<h4 class="good-price">${data[key].cost}грн</h4>`;
                out += `<button  class="btn btn-default add-to-cart" data-id="${key}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
                out += '<a href="#"><i class="fa fa-plus-square"></i>Добавить в список желаний</a>';
               out += '</div></div></div></div></div>';
    }
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

$(document).ready(function() {
    init();
    loadCart();
    });
// console.log(data));