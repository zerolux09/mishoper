<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/cabinetmaterialize/style.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/cabinetmaterialize/materialize.min.css"
        media="screen,projection" />
</head>

<!-- <section id="form"> -->
<!--form-->
<!-- <div class="container">
            <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"> -->
<!--login form-->
<!-- <h2>Вход в свой аккаунт</h2>
                <form action="#">
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email Address" />
                    <span>
                    <input type="checkbox" class="checkbox" />
                    Держите меня в системе
                    </span>
                    <button type="submit" class="btn btn-default">
                    Авторизоваться
                    </button>
                </form>
                </div> -->
<!--/login form-->
<!-- </div> -->
<!-- <div class="col-sm-1">
            <h2 class="or">ИЛИ</h2>
          </div>
          <div class="col-sm-4">
            <div class="signup-form">
              <h2>Регистрация нового пользователя!</h2>
              <form method="POST">
                <div>
                  name: <input type="text" name="name" id="signup-name" />
                </div>
                <div>
                  email: <input type="text" name="email" id="signup-email" />
                </div>
                <div>
                  password: <input type="text" name="pass" id="signup-pass" />
                </div>
                <div>
                  birthday:
                  <input type="text" name="birthday" id="signup-birthday" />
                </div>
                <div class="whoareyou"style="display:flex; justify-content:space-between;">
                  sex:
                  <div>
                    <input
                      type="radio"
                      value="male"
                      name="sex"
                      checked
                      class="sex"
                    />male
                  </div>
                  <div>
                    <input
                      type="radio"
                      value="female"
                      name="sex"
                      class="sex"
                    />female
                  </div>
                  <div>
                    <input
                      type="radio"
                      value="other"
                      name="sex"
                      class="sex"
                    />other
                  </div>
                </div>
                <input type="submit" value="Зарегистрироваться" id="signup-submit" />
              </form>
            </div>
          </div>
          </div>
      </div>
    </section> -->
<!--new form sing-up -->
<section class="site-header">
    <!-- <div class="container"> -->
    <div class="row">
        <!-- <div class="block-log"> -->
        <h1 class="site-title text-center ">Авторизация</h1>
        <button class="modal-project-close modal-wrap btn-floating waves-effect waves-light blue lighten-1">
            <!-- <i class="material-icons">close</i> -->close
        </button>
        <div class="block-sing">
            <button class="modal-show waves-effect waves-light btn " data-modal="#sign-up">Регистрация</button>
            <button class="modal-show waves-effect waves-light btn " data-modal="#log-in">Вход</button>
        </div>



        <!-- </div> -->
    </div>
</section>


<div class="modal-wrap hide" id="sign-up">
    <div class="modal-project sign-up-modal">
        <button class="modal-project-close btn-floating waves-effect waves-light blue lighten-1">
            <i class="material-icons">close</i></button>
        <div class="form-slider-wrapper">
            <div class="form-slider">
                <div class="left-50">
                    <form>
                        <div class="row">
                            <div class="input-field col l6">
                                <input placeholder="Your name" name="name" id="signup-name" type="text"
                                    class="validate">
                                <label for="signup-name">Name</label>
                            </div>
                            <div class="input-field col l6">
                                <input name="pass" id="signup-pass" type="password" class="validate">
                                <label for="signup-pass">Password</label>
                            </div>
                            <div class="input-field col l6">
                                <input placeholder="Your email" name="email" id="signup-email" type="email"
                                    class="validate">
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
                                <button id="signup-submit" class="waves-effect waves-light btn disabled">Sign
                                    In</button>
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
</div>

<div class="modal-wrap hide" id="log-in">
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
</div>
<!--new form singup-->