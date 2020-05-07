<head>
    <link href="../css/price-range.css" rel="stylesheet" />
    <!-- <link href="css/cabinetmaterialize/materialize.min.css" rel="stylesheet" /> -->
</head>
<section id="slider">
    <!--slider-->
    <div class="container"> 
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active bgcarousel-modal">
                            <div class="col-sm-6 ">
                                <h1><span>REDMI NOTE</span>9S</h1>
                                <h2>SPECIAL EDITION</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                                <button type="button" class="btn btn-default get">
                                    Сделать пред заказ
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/girl1.png" class="girl img-responsive" alt="" />
                                <img src="images/home/pricingforredmi.png" class="pricing" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>MI</span>-SHOPPER</h1>
                                <h2>Интернет Магазин</h2>
                                <p>
                                    Акция для новыъ клиентов ! Зарегистрируйтесь в нашем мазагине и получите подарочный купон на первую покупку в личном кабинете !
                                </p>
                                <button type="button" class="btn btn-default get">
                                    регистрация
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <img  src="images/home/present.png" class="girl img-responsive" style=" width: 90%;" alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>MI</span>-SHOPPER</h1>
                                <h2>Интернет Магазин</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua.
                                </p>
                                <button type="button" class="btn btn-default get">
                                    Получить сейчас
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/kolonka-xiaomi-mi-outdoor-bluetooth-speaker-dark-gray.jpg" class="girl img-responsive" alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>категории</h2>
                    <div class="filter-goods"></div>
                    <!-- <div class="panel-group category-products" id="accordian">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="category#">Bluetooth
                                        Колонки</a>
                                </h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Мода</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Гаджеты</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Смартфоны</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="#">Аксесуари для Смартфоны</a>
                                </h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Сумки и Бананки</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Обувь</a></h4>
                            </div>
                        </div>
                    </div> -->
                    <!--/category-products-->


                    <div class="price-range">
                        <!--price-range-->
                        <h2>Ценовой диапазон</h2>
                        <div class="well text-center">
                            <input type="text" class="span2" value="5" data-slider-min="0" data-slider-max="10000"
                                data-slider-step="5" data-slider-value="[250,450]" id="sl2" /><br />
                            <b class="pull-left">0грн</b> <b class="pull-right">10000грн </b>
                        </div>
                    </div>
                    <!--/price-range-->

                    <div class="shipping text-center">
                        <!--shipping-->
                        <img src="images/home/shipping.jpg" alt="" />
                    </div>
                    <!--/shipping-->
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Каталог</h2>
                    <div class="goods-out"></div>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li>
                        <a href="#"><i class="fa fa-plus-square"></i>Добавить в список желаний</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-plus-square"></i>Добавить к
                            сравнению</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--features_items-->



    <!--/recommended_items-->
</section>