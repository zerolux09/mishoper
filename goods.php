<!-- <link rel="stylesheet" href="/css/cabinetmaterialize/materialize.min.css"> -->

<main>
    <div class="mini-cart"> </div>
    <div class="goods-out"> </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-6 col-sm-5">
            <div class="com-sm-5 ">
                 <div class="write-comment ">
                     <h1>Оставить отзыв:</h1>
                    <form class="comment-form">
                    <div class="form-group ">
                    <label for="comment-name">Ваше Имя:</label>
                    <input type="text" class="form-control" id="comment-name"  placeholder="Например:Игорь" name="name">
                    </div>
                    <div class="form-group">
                    <label for="comment-body">Ваш коментарий:</label>
                    <textarea type="text" class="form-control" id="comment-body" name="comment" placeholder="Как быстро пришел ? Как оцените качество качество?" value="cawqwf qwdd">sac</textarea>
                    </div>
                    <div class="form-group form-check text-right">
                    <button type="submit" id="comment-add" data-id="${id}"  class="btn  btn-primary">Отправить</button>
                    </div>
                    </form>
                    <div class="comment-field"></div>
                </div>
                </div>
                </div>
        </div>
    </div>
   
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/goods.js"></script>
<script src="js/comments.js"></script>
