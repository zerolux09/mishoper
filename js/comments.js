let comments = {};

function initReview() {
    $.post(
        "admin/core.php",
        {
            "action": "initReview"
        },
        showComments
    );
}
function showComments(data) {
    data = JSON.parse(data);
    // console.log(data);
    var out = '';
    for (var id in data) {
        out += `<div class="block-comment">`;
        out += `<p class="text-right small"><em>${timeConverter (data[id].date)}</em></p>`;
        out += `<p class="alert alert-primary" role="alert">${data[id].name}</p>`;
        out += `<p class="alert alert-success" role="alert">${data[id].comment}</p>`;
        out += `</div>`;
        }
    $('.comment-field').html(out);

    }
   


document.querySelector('#comment-add').onclick = function (event) {
    event.preventDefault();
    let name = document.querySelector('#comment-name').value;
    let comment = document.querySelector('#comment-body').value;

    // let email = document.querySelector('#signup-email').value;

    let data = {
        "name": name,
        "comment": comment,
        "time": Math.floor(Date.now() / 1000)
    }
    ajax('core/comments.php', 'POST', comments, data);

    function comments(result) {
        console.log(result);
        if (result == 2) {
            // M.toast({ html: 'Заполните поля' });
            alert('Заполните поля' );

        }
        else if (result == 1) {
            alert('Комментарий успешно добавлен!');
            // M.toast({ html: 'Успех. Теперь можно войти!' });
            // closeModal();
        }
        else {
            // M.toast({ html: 'Ошибка, попробуйте позже!' });
            alert('Ошибка, попробуйте позже!');
        }
    }
    
}
function timeConverter(UNIX_timestamp) {
    var a = new Date(UNIX_timestamp * 1000);
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var hour = a.getHours();
    var min = a.getMinutes();
    var sec = a.getSeconds();
    var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec;
    return time;
}


$(document).ready(function () {
    initReview();
});













