var cart = {}; //korzina
function loadCart() {
    //проверяю есть ли в localStorage запись cart
    if (localStorage.getItem('cart')) {
        // если есть - расширфровываю и записываю в переменную cart
        cart = JSON.parse(localStorage.getItem('cart'));
            showCart();
        }
    else {
        $('.main-cart').html('Корзина пуста!');
    }
}

function showCart() {
     //вывод корзины
     if (!isEmpty(cart)) {
        $('.main-cart').html('Корзина пуста!');
    }
    else {
        $.getJSON('goods.json', function (data) {
            var goods = data;
            var out = '';
 for (var id in cart) {
      out +='<div class="table-responsive cart_info"><table class="table table-condensed"><thead><tr class="cart_menu"><td class="image">Вещь</td><td class="description"></td><td class="price">Цена</td><td class="quantity">Количество<td><td class="total">Общее количество</td><td></td></tr></thead></div></div><tbody><tr>';
         out +='<td class="cart_product"><a href="#">';
     out +=`<img src="images/product-details\\${goods[id].img}" width="96"></a></td>`;
             out += `<td class="cart_description"><p class="name"><a href="goods#${id}">${goods[id].name}</p></a>`;
             out += `<p>WebID:`;
             out += + id +  '</p><br></td>';
           out +='<td class="cart_price"><p>'
         out += cart[id]*goods[id].cost;
        out += '</p></td>';
      out += '<td class="cart_quantity"><div class="cart_quantity_button">';
             out +=`<button class="cart_quantity_up plus-goods"  data-id="${id}"> + </button>`;
             out +=`<input class="cart_quantity_input" type="text" name="quantity" value="${cart[id]}" autocomplete="off" size="2">`;
             out +=`<button class="minus-goods cart_quantity_down" data-id="${id}">-</button>`;
        out +='</div>';
       out +='</td>';
      out +='<td class="cart_total"><p class="cart_total_price">';
        out += cart[id]*goods[id].cost;
     out +='</p></td> <td class="cart_delete">';
        out +=`<button class="del-goods cart_quantity_delete" data-id="${id}"><i class="fa fa-times"></i></a></button></td>`;
      out +='</tr></tbody></table>';
    out += '<br>';
 }
        $('.main-cart').html(out);
        $('.del-goods').on('click', delGoods);
        $('.plus-goods').on('click', plusGoods);
        $('.minus-goods').on('click', minusGoods);
            });
        }
    }


    function delGoods() {
        //удаляем товар из корзины
        var id = $(this).attr('data-id');
        delete cart[id];
        saveCart();
        showCart();
    }
    function plusGoods() {
        //добавляет товар в корзине
        var id = $(this).attr('data-id');
        cart[id]++;
        saveCart();
        showCart();
    }
    function minusGoods() {
        //уменьшаем товар в корзине
        var id = $(this).attr('data-id');
        if (cart[id]==1) {
            delete cart[id];
        }
        else {
            cart[id]--;
        }
        saveCart();
        showCart();
    }


function saveCart() {
    //сохраняю корзину в localStorage
    localStorage.setItem('cart', JSON.stringify(cart)); //корзину в строку
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