// var cart = {}; //korzina
// function isEmpty(object){
  //  провірка на пустоту
  // for (var key in object)
  // if (object.hasOwnProperty(key))return true;
//   return false;
// }


function loadCart() {
  //проверяю есть ли в localStorage запись cart
  if (localStorage.getItem('cart')) {
    // если есть - расширфровываю и записываю в переменную cart
    cart = JSON.parse(localStorage.getItem('cart'));
    showMiniCart();
  }
}
// function showMiniCart() {
//   //показываю мини корзину
//   $.getJSON('goods.json', function (data) {
//     var goods = data;
//     var out = '';
//     for (var id in cart) {
//       out += '<div class="mini-cartt"><br>';
//       out += ` ${id}  ${goods[id].name}`;
//       out += `<p>id: ${cart[id]} </p>   `;
//       out += '</div>';
//     }
//     $('.mini-cart').html(out);
//   });
// }

function sendEmail(){
    
    var ename = $('#ename').val();
    var email = $('#email').val();
    var ephone = $('#ephone').val();
    var subject = $('#subject').val();
    var message = $('#message').val();
    if (ename!='' && email!='' && ephone!='' && subject!='' && message!=''){
        // if(isEmpty(cart)) {
        $.post(
                "core/mail.php",
                {
                    "ename": ename,
                    "email": email,
                    "ephone" : ephone,
                    "subject": subject,
                    "message": message
                },
                function(data){
                    if (data==1) {
                       alert('Замовлення відправлено');
                    }
                    else{
                        alert('Спробуйте ще раз (на хості буде "Замовлення відправлено" ');
                    }
                }
        );}
          else {
                alert('заповни форму!');
          }
        }    

$(document).ready(function (){
    // checkCart();
        $('.send-email').on('click', sendEmail);
  });