var cart = {};
// var later = {}; //моя корзина

function init() {
  $.post(
    "admin/core.php",
    {
      "action": "loadGoods"
    },
    goodsOut 
  );
}



function goodsOut(data) {
  // вывод на страницу
  data = JSON.parse(data);
    // console.log(data);
    var out = '';
    for (var key in data) {
          out += ' <div class="col-sm-4"> ';
             out += '<div class="product-image-wrapper"> ';
               out += '<div class="single-products">';
                  out += '<div class="single-goods">'; // помилка тут
                   out += '<div class="productinfo text-center">';
                      out += `<button  class="btn btn-default later" data-id="${key}"><i class="fa fa-heart"></i></button>`;
                      out += `<img class="productinfo-img" src="images/product-details/${data[key].img}">`;
                      out += `<h4 class="good-name"><a href="goods#${key}">${data[key].name}</a></h4>`;
          // out += `<p class="description">${data[key]['description']}</p>`;
                      out += `<p><b>В наличии</b></p>`;
                      out += `<p data-category="${data[key].category}">${data[key].category}</p>`;
                      out += `<h4 class="good-price">${data[key].cost}грн</h4>`;
                      out +=`<button  class="btn btn-default add-to-cart" data-id="${key}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
                      out += '<a href="#"><i class="fa fa-plus-square"></i>Добавить в список желаний</a>';
                      out += '</div></div></div></div></div>';
      // out += `<h4 class="panel-title"><a href="category#${data[14].category}" data-category="bluetoothcolumns">Bluetooth Колонки</a></h4><h4 class="panel-title"><a href="category#${data[5].category}" data-category="fashion">Мода</a></h4>`;
      // out += ``;

     }
    $('.goods-out').html(out);
    $('.add-to-cart').on('click', addToCart);
    $('.later').on('click', addToLater);
    
}

function init2() {
  $.post(
    "admin/core.php",
    {
      "action": "loadFilter"
    },
    navFilter
  );
}


function navFilter(data){
  data = JSON.parse(data);
  //  console.log(data);
  var out = '';
  // for (var key in data) {
  // out += ``;  
  out += `     <div class="panel-group category-products" id="accordian">`;
    out += `        <div class="panel panel-default" data-key="14" >`;
    out += `           <div class="panel-heading" data-key="14" >`;
    out += `<h4 class="panel-title"data-key="14" ><a href="category#${data[14].category}"data-key="14"  >BluetoothКолонки</a></h4>`;
  out += `             </div>`;
  out += `           </div>`;
  out += `            <div class="panel panel-default">`;
  out += `              <div class="panel-heading">`;
    out += `                <h4 class="panel-title"><a href="category#${data[5].category}" data-key="5">Мода</a></h4>`;
  out += `              </div>`;
  out += `            </div>`;
  out += `            <div class="panel panel-default">`;
  out += `              <div class="panel-heading">`;
  out += `                <h4 class="panel-title"><a href="category#${data[16].category}" data-key="16">Гаджеты</a></h4>`;
  out += `              </div>`;
  out += `            </div>`;
  out += `            <div class="panel panel-default">`;
  out += `              <div class="panel-heading">`;
  out += `                <h4 class="panel-title"><a href="category#${data[1].category}" data-key="1">Смартфоны</a></h4>`;
  out += `              </div>`;
  out += `            </div>`;
  out += `            <div class="panel panel-default">`;
  out += `              <div class="panel-heading">`;
  out += `                <h4 class="panel-title">`;
  out += `                  <a href="category#${data[8].category}" data-key="8">Аксесуари для Смартфона</a>`;
  out += `                </h4>`;
  out += `              </div>`;
  out += `            </div>`;
  out += `            <div class="panel panel-default">`;
  out += `              <div class="panel-heading">`;
  out += `                <h4 class="panel-title"><a href="category#${data[4].category}" data-key="4">Сумки и Бананки</a></h4>`;
  out += `              </div>`;
  out += `            </div>`;
  out += `            <div class="panel panel-default">`;
  out += `              <div class="panel-heading">`;
  out += `                <h4 class="panel-title"><a href="category#${data[2].category}" data-key="2">Обувь</a></h4>`;
  out += `              </div>`;
  out += `            </div>`;
  out += `          </div>`;
  $('.filter-goods').html(out);
      }
  
function init3() {
  $.post(
    "admin/core.php",
    {
      "action": "loadRecomends"
    },
    singleProducts
  );
}
function singleProducts(data) {
  // вывод на страницу
  data = JSON.parse(data);
  // console.log(data);
  var out = '';
  // out += '<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">';
  out += '<div class="carousel-inner">';
  out +=    '<div class="item active data-target="#recommended-item-carousel">';


  out +=     '<div class="col-sm-3">';
  out +=       '<div class="product-image-wrapper">';
  out +=         '<div class="recomend-products">';
  out +=           '<div class="productinfo text-center">';
  out +=             `<img src="images/product-details/${data[14].img}">`;
  out +=             `<h4 class="good-price">${data[14].cost}грн</h4>`;
  out +=             `<h4 class="good-name"><a href="goods#${14}">${data[14].name}</a></h4>`;
  out +=             `<button  class="btn btn-default add-to-cart" data-id="${14}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
  out +=           '</div>';
  out +=         '</div>';
  out +=        '</div>';
  out +=       '</div>';

  out +=       '<div class="col-sm-3">';
  out +=        '<div class="product-image-wrapper">';
  out +=         '<div class="recomend-products">';
  out +=           '<div class="productinfo text-center">';
  out +=             `<img src="images/product-details/${data[1].img}">`;
  out +=             `<h4 class="good-price">${data[1].cost}грн</h4>`;
  out +=             `<h4 class="good-name"><a href="goods#${1}">${data[1].name}</a></h4>`;
  out +=             `<button  class="btn btn-default add-to-cart" data-id="${1}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
  out +=           '</div>';
  out +=          '</div>';
  out +=         '</div>';
  out +=        '</div>';

  out +=       '<div class="col-sm-3">';
  out +=        '<div class="product-image-wrapper">';
  out +=         '<div class="recomend-products">';
  out +=           '<div class="productinfo text-center">';
  out +=             `<img src="images/product-details/${data[3].img}">`;
  out +=             `<h4 class="good-price">${data[3].cost}грн</h4>`;
  out +=             `<h4 class="good-name"><a href="goods#${3}">${data[3].name}</a></h4>`;
  out +=             `<button  class="btn btn-default add-to-cart" data-id="${3}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
  out +=           '</div>';
  out +=          '</div>';
  out +=         '</div>';
  out +=        '</div>';

  out +=     '<div class="col-sm-3">';
  out +=       '<div class="product-image-wrapper">';
  out +=         '<div class="recomend-products">';
  out +=           '<div class="productinfo text-center">';
  out +=             `<img src="images/product-details/${data[8].img}">`;
  out +=             `<h4 class="good-price">${data[8].cost}грн</h4>`;
  out +=             `<h4 class="good-name"><a href="goods#${8}">${data[8].name}</a></h4>`;
  out +=             `<button  class="btn btn-default add-to-cart" data-id="${8}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
  out +=            '</div>';
  out +=          '</div>';
  out +=         '</div>';
  out +=        '</div>';

  out +=       '</div>';
  // out +=     '</div>';
  // out +=    '</div>';


  out +=    '<div class="item" data-target="#recommended-item-carousel">';

  out +=      '<div class="col-sm-3">';
  out +=        '<div class="product-image-wrapper">';
  out +=          '<div class="recomend-products">';
  out +=            '<div class="productinfo text-center">';
  out +=              `<img src="images/product-details/${data[14].img}">`;
  out +=              `<h4 class="good-price">${data[14].cost}грн</h4>`;
  out +=              `<h4 class="good-name"><a href="goods#${14}">${data[14].name}</a></h4>`;
  out +=              `<button  class="btn btn-default add-to-cart" data-id="${14}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
  out +=              '</div>';
  out +=            '</div>';
  out +=            '</div>';
  out +=            '</div>';

  out +=     '<div class="col-sm-3">';
  out +=       '<div class="product-image-wrapper">';
  out +=          '<div class="recomend-products">';
  out +=           '<div class="productinfo text-center">';
  out +=            `<img src="images/product-details/${data[14].img}">`;
  out +=            `<h4 class="good-price">${data[14].cost}грн</h4>`;
  out +=            `<h4 class="good-name"><a href="goods#${14}">${data[14].name}</a></h4>`;
  out +=             `<button  class="btn btn-default add-to-cart" data-id="${14}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
  out +=           '</div>';
  out +=          '</div>';
  out +=          '</div>';
  out +=          '</div>';

  out +=     '<div class="col-sm-3">';
  out +=       '<div class="product-image-wrapper">';
  out +=          '<div class="recomend-products">';
  out +=           '<div class="productinfo text-center">';
  out +=            `<img src="images/product-details/${data[14].img}">`;
  out +=            `<h4 class="good-price">${data[14].cost}грн</h4>`;
  out +=            `<h4 class="good-name"><a href="goods#${14}">${data[14].name}</a></h4>`;
  out +=             `<button  class="btn btn-default add-to-cart" data-id="${14}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
  out +=           '</div>';
  out +=          '</div>';
  out +=          '</div>';
  out +=          '</div>';

  out +=     '<div class="col-sm-3">';
  out +=       '<div class="product-image-wrapper">';
  out +=          '<div class="recomend-products">';
  out +=            '<div class="productinfo text-center">';
  out +=              `<img src="images/product-details/${data[14].img}">`;
  out +=              `<h4 class="good-price">${data[14].cost}грн</h4>`;
  out +=              `<h4 class="good-name"><a href="goods#${14}">${data[14].name}</a></h4>`;
  out +=              `<button  class="btn btn-default add-to-cart" data-id="${14}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
  out +=            '</div>';
  out +=           '</div>';
  out +=           '</div>';
  out +=           '</div>';

  out +=          '</div>';
  out +=        '</div>';
  out +=      '</div>';


  out +=      `<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">`;
  out +=        `<i class="fa fa-angle-left"></i></a>`;
  out +=      `<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">`;
  out +=        `<i class="fa fa-angle-right"></i></a>`;
  out +=  '</div>';
  // out += '</div>';
  
  $('#recommended-item-carousel').html(out);// помилка тут
}

function addToLater() {
  var later = {};
  if (localStorage.getItem('later')) {
    // если есть - расширфровываю и записываю в переменную cart
    later = JSON.parse(localStorage.getItem('later'));
  }
  alert('Добавлено в избранные');
  var id = $(this).attr('data-id');
  if (later[id] != undefined) {
    later[id]++;
  } else {
    later[id] = 1;
  }
  localStorage.setItem('later', JSON.stringify(later));
  console.log(cart);
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
  $.getJSON('goods.json', function (data) {
    var goods = data;
    var out='';
  for (var id in cart) {
      out += '<div class="mini-cartt"><br>';
    out += `<p>  ${goods[id].name }</p>`;
      out += `<p>id: ${cart[id]} </p>   `;
      out += '</div>';
  }           
  $('.mini-cart').html(out);
    });
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
  init2();
  init3();
  loadCart();
});

