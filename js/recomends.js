var cart = {};
// var later = {}; //моя корзина

function init() {
  $.post(
    "admin/core.php",
    {
      "action": "init"
    },
    singleProducts //--> можк не та функція що в тебе
  );
}

// $('document').ready(function() {
//   loadGoods();
//   checkCart();
//   showMiniCart();
// });

function singleProducts(data) {
  // вывод на страницу
  data = JSON.parse(data);
  // console.log(data);
  var out = '';
  
    // out += '<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">';
    // out += '<div class="carousel-inner">';
    // out += '<div class="item active">';
    // out += '<div class="col-sm-4">';
    // out += '<div class="product-image-wrapper">';
      // out += '<div class="single-products">'; 
      out +=  '<div class="productinfo text-center">';
      out +=    `<img src="images/product-details/$${data[14].img}">`;
      out +=     `<h4 class="good-price">${data[14].cost}грн</h4>`;
      out +=     `<h4 class="good-name"><a href="goods#${14}">${data[14].name}</a></h4>`;
      out +=     '<a href="#" class="btn btn-default add-to-cart">';
      out +=      `<button  class="btn btn-default add-to-cart" data-id="${14}"><i class="fa fa-shopping-cart"></i>Купить</button>`;
      out +=     '</div>';
      out +=  '</div>';
    // out += '</div>';
    // out += '</div>';
    // out += '</div>';
    // out += '</div>';
    // out += '</div>';
  
  $('.single-products').html(out);
  $('.add-to-cart').on('click', addToCart);
}






$(document).ready(function () {
  init();
});


// function checkCart() {
//   // проверяю наличие корзины в localstorage;
//   if (localStorage.getItem('cart') != null) {
//     cart = JSON.parse(localStorage.getItem('cart'));
//   }
// }