var cart = {}; //korzina
function loadCart() {
    //проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('cart')) {
        // если есть - расширфровываю и записываю в переменную cart
        cart = JSON.parse(localStorage.getItem('cart'));
            showCart();
        }
    else {
        $('.total-price').html('Виберете товар!');
    }
}

function showCart() {
     //вывод корзины
     if (!isEmpty(cart)) {
        $('.total-price').html('Виберете товар!');
    }
    else {
        $.getJSON('goods.json', function (data) {
            var goods = data;
            var out = '';
 for (var id in cart) {
      out +='<div class="col-sm-12"><div class="total_area">';//<div class="main-cart"></div>
        out +='<div class="col-sm-12"><ul class="total_price">';
         out +=`<li>Итого по корзине <span>${cart[id]*goods[id].cost}</span></li>`;
         out +=`<li>Использовать купон <span><input type="checkbox"> </span></li>`;
         out +=`<li> Стоимость доставки <span> 40UAH </span> </li>`;
        out += `<li> Всего <span>${cart[id] * goods[id].cost+40}</span> </li></ul></div> `;
        //  out +=`<a class="btn btn-default update" href="">Обновить</a>`;
        //  out +=`<a class="btn btn-default check_out" href="">Проверять, выписываться</a>`;
        //  out +=`<a class="btn btn-default update" href="">Получить цитаты</a>`;
        out +=`<a class="btn btn-default check_out" href="">Продолжить</a>`;
      out +=`</div></div></div></div>`;

 }
           $('.total-price').html(out);
        // $('.del-goods').on('click', delGoods);
        // $('.plus-goods').on('click', plusGoods);
        // $('.minus-goods').on('click', minusGoods);
            });
        }
    }

function checkCart(){
    // проверяю наличие корзины в localstorage;
    if (localStorage.getItem('cart') != null) {
        cart = JSON.parse (localStorage.getItem('cart'));
    }
}
function isEmpty(object){
    //  провірка на пустоту
    for (var key in object)
    if (object.hasOwnProperty(key))return true;
    return false;
}

function sendEmail() {
    var ename = $('#ename').val();
    var email = $('#email').val();
    var ephone = $('#ephone').val();
    if (ename!='' && email!='' && ephone!='') {
        if (isEmpty(cart)) {
            $.post(
                "core/mail.php",
                {
                    "ename" : ename,
                    "email" : email,
                    "ephone" : ephone,
                    "cart" : cart
                },
                function(data){
                    if (data==1) {
                       alert('Замовлення відправлено');
                    }
                    else{
                        alert('Спробуйте ще раз ');
                    }
                }
        );
        }   
          else {
            alert('Корзина пуста');
          }
        }
          else {
                alert('заповни форму!');
          }
        }    

$(document).ready(function (){
    loadCart();
        $('.send-email').on('click', sendEmail);
  });