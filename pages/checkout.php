<!-- <head>
<link type="text/css" rel="stylesheet" href="css/cabinetmaterialize/materialize.min.css"/>
<link type="text/css" rel="stylesheet" href="css/cabinetmaterialize/style.css"  media="screen,projection"/>
</head> -->

<section id="cart_items">
    <div class="main-cart"></div>
    <div class="container">

        <!--/breadcrums-->

        <div class="step-one">
            <h2 class="heading">Крок1</h2>
        </div>
        <div class="checkout-options">
            <h3>Новый пользователь</h3>
            <p>Варианты оформления заказа</p>
            <ul class="nav">
                <li>
                    <label><input type="checkbox" /> Регистрация Аккаунта</label>
                </li>
                <li>
                    <label><input type="checkbox" /> Гостевой заказ</label>
                </li>
                <li>
                    <a href="/"><i class="fa fa-times"></i>Отмена</a>
                </li>
            </ul>
        </div>
        <!--/checkout-options-->

        <div class="register-req">
            <p>
                Пожалуйста, используйте Зарегистрироваться и оформить заказ, чтобы легко получить
                доступ к своей истории заказов, или используйте Checkout в качестве
                гостя.
            </p>
        </div>
        <!--/register-req-->


</section>



<section id="do_action">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="email-field total_area form-one">
                    <form>
                        <input type="text" id="ename" placeholder="Ваше ФИО:" />
                        <input type="text" id="email" placeholder="Email:" />
                        <input type="text" id="ephone" placeholder="Телефон:" />
                    
                </div>
            </div>
            <div class="col-sm-6">
                <div class="chose_area">
                    <ul class="user_info">

                        <li class="single_field">
                            <label>Способ доставки:</label>
                            <select>
                                <option>Нова поча</option>
                                <option>Укр поча</option>
                                <option>Самовывоз</option>
                            </select>
                        </li>
                        <li class="single_field">
                            <label>Область:</label>
                            <select>
                                <option>Select</option>
                                <option>Dhaka</option>
                                <option>London</option>
                            </select>
                        </li>
                        <li class="single_field">
                            <label>Город:</label>
                            <select>
                                <option>какой to город</option>
                                <option>какой to город</option>
                                <option>какой to город</option>
                            </select>
                        </li>
                        <li class="single_field">
                            <label>Отделение:</label>
                            <select>
                                <option>№1</option>
                                <option>№2</option>
                                <option>№3</option>
                            </select>
                        </li>

                        <li class="single_field">
                            <label>Способ оплаты:</label>
                            <select>
                                <option>Карта</option>
                                <option>Наложный</option>
                            </select>
                        </li>
                  </div>
                </ul>
                </form>
            </div>
        </div>
          <div class="review-payment">
            <h2 class="text-center">Обзор и оплата</h2>
          </div>
          <div class="total-price"></div>
      </div>


</section>
<!--/#do_action-->