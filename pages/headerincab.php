<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/prettyPhoto.css" rel="stylesheet" />
    <link href="css/price-range.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/cabinetmaterialize/style.css" rel="stylesheet" />
    <link href="css/cabinetmaterialize/materialize.css" rel="stylesheet" />
    

    <!--Import materialize.css матеріалайз для cabinet.php + login.php -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/cabinetmaterialize/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/cabinetmaterialize/style.css"  media="screen,projection"/> 
    
    <!-- матеріалайз для cabinet.php + login.php -->

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico" />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="144x144"
      href="images/ico/apple-touch-icon-144-precomposed.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="114x114"
      href="images/ico/apple-touch-icon-114-precomposed.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="72x72"
      href="images/ico/apple-touch-icon-72-precomposed.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      href="images/ico/apple-touch-icon-57-precomposed.png"
    /></head
  ><!--/head-->

  <body>
    <header id="header">
      <!--header-->
      <div class="header_top">
        <!--header_top-->
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="contactinfo">
                <ul class="nav nav-pills">
                  <li>
                    <a href="#"><i class="fa fa-phone"></i> +380 99 631 8925</a>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-envelope"></i>
                      agent007michael@gmail.com</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="social-icons pull-right">
                <ul class="nav navbar-nav">
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header_top-->

      <div class="header-middle">
        <!--header-middle-->
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="logo pull-left">
                <a href="/"
                  ><img src="images/home/logo.png" alt=""
                /></a>
              </div>
              <div class="btn-group pull-right">
                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-default dropdown-toggle usa"
                    data-toggle="dropdown"
                  >
                    USA
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Украина</a></li>
                    <li><a href="#">Europe</a></li>
                  </ul>
                </div>

                <div class="btn-group">
                  <button
                    type="button"
                    class="btn btn-default dropdown-toggle usa"
                    data-toggle="dropdown"
                  >
                    DOLLAR
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">UAH</a></li>
                    <li><a href="#">USA</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="shop-menu pull-right">
                <div id="mini-cart"></div>
                <ul class="nav navbar-nav">
                  <li>
                    <a href="#"><i class="fa fa-user"></i>Личний Кабинет</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-star"></i> Список желаний</a>
                  </li>
                  <li>
                    <a href="checkout"
                      ><i class="fa fa-crosshairs"></i> оформить заказ</a
                    >
                  </li>
                  <li>
                    <a href="cart"
                      ><i class="fa fa-shopping-cart"></i> Корзина</a
                    >
                  </li>
                  <li>
                    <!-- <a href="login"><i class="fa fa-lock"></i> Вход</a> -->
                    <div class="col l2">
                    <button class="modal-show waves-effect waves-light btn" data-modal="#logout">logout</button>
                </div>
                <!-- <div class="col l2">
                    <button class="modal-show waves-effect waves-light btn" data-modal="#log-in">Login</button>
                </div> -->
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header-middle-->

      <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
          <div class="row">
            <div class="col-sm-9">
              <div class="navbar-header">
                <button
                  type="button"
                  class="navbar-toggle"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                >
                  <span class="sr-only">Переключить навигацию</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="mainmenu pull-left">
                <ul class="nav navbar-nav collapse navbar-collapse">
                  <li><a href="index" class="active">Главная</a></li>
                  <li class="dropdown">
                    <a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                      <li><a href="shop">Блог</a></li>
                      <li>
                        <a href="product-details">Описание товара</a>
                      </li>
                      <!-- <li><a href="checkout">Checkout</a></li> -->
                      <li><a href="cart">Корзина</a></li>
                      <li><a href="login">Вход</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#">Блог<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                      <li><a href="blog">Отзыви о товарах</a></li>
                      <li><a href="blog-single">Новости</a></li>
                    </ul>
                  </li>
                  <li><a href="404">Резерв</a></li>
                  <li><a href="contact-us">Контакты</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="search_box pull-right">
                <input type="text" placeholder="Search" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header-bottom-->
      <!-- <div class="modal-wrap hide" id="sign-up">
        <div class="modal-project sign-up-modal">
            <button class="modal-project-close btn-floating waves-effect waves-light blue lighten-1">
                <i class="material-icons">close</i></button>
            <div class="form-slider-wrapper">
                <div class="form-slider">
                    <div class="left-50">
                        <form>
                            <div class="row">
                                <div class="input-field col l6">
                                    <input placeholder="Your name" name="name" id="signup-name" type="text" class="validate">
                                    <label for="signup-name">Name</label>
                                </div>
                                <div class="input-field col l6">
                                    <input name="pass" id="signup-pass" type="password" class="validate">
                                    <label for="signup-pass">Password</label>
                                </div>
                                <div class="input-field col l6">
                                    <input placeholder="Your email" name="email" id="signup-email" type="email" class="validate">
                                    <label for="signup-email">Email</label>
                                </div>
                                <div class="input-field col l6">
                                    <input placeholder="Your birthday" name="birthday" id="signup-birthday" type="text"
                                        class="datepicker">
                                    <label for="signup-birthday">birthday</label>
                                </div>
                                <div class="col l12">
                                    <p>
                                        <label>
                                            <input type="radio" value="male" name="sex" checked class="sex">
                                            <span>Male</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="radio" value="female" name="sex" class="sex">
                                            <span>Female</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="radio" value="other" name="sex" class="sex">
                                            <span>Other</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="col l6">
                                    <p>
                                        <label>
                                            <input type="checkbox" id="agree-rules">
                                            <span>Agree Rules</span>
                                        </label>
                                    </p>
                                </div>
                                <div class="col l6">
                                    <p class="read-rules">
                                        (read rules)
                                    </p>
                                </div>
                                <div class="col l12 right-align">
                                    <button id="signup-submit" class="waves-effect waves-light btn disabled">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="right-50">
                        <p class="read-rules-back">Back</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolores odio nobis
                            omnis.
                            Dolor,
                            impedit? Eaque enim illum at. </p>
                        <p>Exercitationem unde aperiam soluta minus aliquid at deleniti quas facilis
                            ipsam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolores odio nobis
                            omnis.
                            Dolor,
                            impedit? Eaque enim illum at. </p>
                        <p>Exercitationem unde aperiam soluta minus aliquid at deleniti quas facilis
                            ipsam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolores odio nobis
                            omnis.
                            Dolor,
                            impedit? Eaque enim illum at. </p>
                        <p>Exercitationem unde aperiam soluta minus aliquid at deleniti quas facilis
                            ipsam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolores odio nobis
                            omnis.
                            Dolor,
                            impedit? Eaque enim illum at. </p>
                        <p>Exercitationem unde aperiam soluta minus aliquid at deleniti quas facilis
                            ipsam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="modal-wrap hide" id="log-in">
        <div class="modal-project">
            <form>
                <div class="row">
                    <div class="input-field col l12">
                        <input placeholder="Your email" name="email" id="login-email" type="text" class="validate">
                        <label for="login-email">Email</label>
                    </div>
                    <div class="input-field col l12">
                        <input name="pass" id="login-pass" type="password">
                        <label for="login-pass">Password</label>
                    </div>
                    <div class="col l12 right-align">
                        <button id="login-submit" class="waves-effect waves-light btn">Login</button>
                    </div>
                </div>
            </form>
            <button class="modal-project-close btn-floating waves-effect waves-light blue lighten-1">
                <i class="material-icons">close</i></button>
        </div>
    </div> -->
    </header>