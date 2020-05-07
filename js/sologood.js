var cart = {};
var later = {}; //моя корзина

// function init() {
//   $.post(
//     "admin/js/core.php",
//     {
//       "action": "loadGoods"
//     },
//     loadGoods // можк не та функція що в тебе
//   );
// }

$('document').ready(function() {
  loadGoods();
  checkCart();
  showMiniCart();
});

function loadGoods() {
  // data = JSON.parse(data);
  //загружаю товары на страницу
  $.getJSON('goods.json', function(data) {
    console.log(data);      
    var out = '';
    for (var key in data) {
      out += ' <div class="col-sm-4"> ';
      out += '<div class="product-image-wrapper"> ';
      out += '<div class="single-products">';
      out += '<div class="single-goods">';
      out += '<div class="productinfo text-center">';
      out += '<button  class="btn btn-default later" data-art="' + key + '">like</button>';
      out += `<img src="${data[key].image}">`;
      out += `<p>Цена: ${data[key]['cost']}</p>`;
      out += `<p class="name"><a href="product-details#${key}">${data[key]['name']}</a></p>`;
      out += `<p class="description"><a href="goods.html#${key}">${data[key]['description']}</a></p>`;
      out +=
        '<button  class="btn btn-default add-to-cart" data-art="' + key +'"><i class="fa fa-shopping-cart"></i>Купить</button>';
      out += '</div>';
      out += '</div>';
      out += '</div>';
      out += '</div>';
      out += '</div>';
    }
    $('#goods').html(out);
    $('button.add-to-cart').on('click', addToCart);
    $('.later').on('click', addToLater);
  });
}
function addToLater() {
  
  if (localStorage.getItem('later')) {
    later = JSON.parse(localStorage.getItem('later'));
  }
  alert('Добавлено в избранные');
  var articul = $(this).attr('data-art');
  if (later[articul] != undefined) {
    later[articul]++;
  } else {
    later[articul] = 1;
  }
  localStorage.setItem('later', JSON.stringify(later));
  console.log(cart);
}

function addToCart() {
  //Добавляем товар в корзину
  var articul = $(this).attr('data-art');
  //    cart[articul] = 1;
  if (cart[articul] != undefined) {
    cart[articul]++;
  } else {
    cart[articul] = 1;
  }
  localStorage.setItem('cart', JSON.stringify(cart));
  console.log(cart);
  showMiniCart();
}

function checkCart() {
  // проверяю наличие корзины в localstorage;
  if (localStorage.getItem('cart') != null) {
    cart = JSON.parse(localStorage.getItem('cart'));
  }
}

function showMiniCart() {
  $.getJSON('goods.json', function(data) {
    //показиваем содержимое корзини
    var out = '';
    for (var w in cart) {
      out += w + '---'  + cart[w] + '<br>';
    }
    // out += '<br><a href="cart">Корзина</a>';
    $('#mini-cart').html(out);
  });
}
