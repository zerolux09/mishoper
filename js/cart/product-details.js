var cart = {};
var description = {};
function init() {
  $.getJSON("goods.json", loadSingleGoods);
  var hash = window.location.hash.substring(1);
  console.log(hash);
  $.post(
      "admin/js/core.php",
      {
        "action": "loadSingleGoods",
        "data-art": "hash"
      },
      loadGoods // можк не та функція що в тебе
    );
  }

    // var goods = data; // все товары в масиве

function loadSingleGoods (){
    $.getJSON('goods.json', function (data) {
    // if(goods.indexOf(data-art) === -1){
    console.log(data-art);
    if (localStorage.getItem("later")) {
      later = JSON.parse(localStorage.getItem("later"));
    var out = '';
    var description = {};
    // for (var key in description){
        out = '<div class="col-sm-9 padding-right"><div class="product-details"><div class="col-sm-5"><div class="view-product">';
        out += `<img src="${data[key].image}">`;
        // <h3>+</h3>
        out ='</div>';
        var out = ' <div class="col-sm-7"><div class="product-information"><img src="images/product-details/new.jpg"class="newarrival" alt=""/><h2>';
        var out = `<a href="goods.html#${key}">${data[key]['name']}</a></h2>`;        
        out += `<p>WebID:`;
        out += key +  '</p><br>';
        var out = '<img src="images/product-details/rating.png" alt=""/>';
        var out = '<span><span>';
        out += cart[key]*goods[key].cost;
        var out = '</span><label>Количество:</label><input type="text" value="3" />';
        out +='<button  class="btn btn-default add-to-cart" data-art="' +key +'"><i class="fa fa-shopping-cart"></i>Купить</button></span>';
        var out = '<p><b>Добавить в корзину:</b>В наличии</p><p><b>Состояние: </b> Новое</p><p><b>Brand:</b>Xiaomi</p>';
        var out = '<a href=""><img src="images/product-details/share.png"class="share img-responsive"alt=""/></a>';
        var out = '</div><!--/product-information--></div></div><!--/product-details-->';
        var out = '<div class="col-sm-12"><ul class="nav nav-tabs"><li><a href="#details" data-toggle="tab">Детали</a></li><li><a href="#companyprofile" data-toggle="tab">Профиль Компании</a></li><li><a href="#tag" data-toggle="tab">Тег</a></li><li class="active"><a href="#reviews" data-toggle="tab">Отзывы (5)</a></li></ul></div>';
        var out = '<div class="tab-content"><div class="tab-pane fade" id="details"><h1> ';
        var out = `<a href="product-details#${key}">${data[key]['name']}</a></h1>`;
        out += `<p class="description"><a href="product-details#${key}">Корзина${data[key]['description']}</a></p></div></div>`;
    }
$('#description').html(out);
loadSingleGoods();
// $('.show-details').html('click', showDescription);
// $('.check-data-art').on('click', checkdataart);   
});
function loadSingleGoods (){
  $.getJSON("goods.json", loadSingleGoods);
    // проверяю наличие корзины в localstorage;
    if (localStorage.getItem("description") != null) {
      later = JSON.parse(localStorage.getItem("description"));
    }
  
}
// });
// function checkdataart(){
//     var articul = $(this).attr('data-art');
//   if(goods.indexOf(data-art) === -1){
      
//   }
// }
}
