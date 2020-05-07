function init() {
  $.post(
    "admin/core.php",
    {
      action: "loadGoods",
    },
    goodsOut // можк не та функція що в тебе
  );
}

function goodsOut(data) {
  data = JSON.parse(data);
    console.log(data);
    var out='';
    var later = {};
    if (localStorage.getItem('later')) {
      // если есть - расширфровываю и записываю в переменную cart
      later = JSON.parse(localStorage.getItem('later'));
      for (var key in later) {
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
        out += '</div>';
        out += '</div>';
        out += '</div>';
        out += '</div>';
        out += '</div>';
        }
      } else { 
        $(".goods-out").html('Добавте товар!');
    }  
      $('.goods-out').html(out);
    }



$(document).ready(function () {
  init();
  // init();
});


