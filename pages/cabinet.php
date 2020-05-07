<?php
//var_dump($_COOKIE);
if (!isset($_COOKIE['email']) or trim($_COOKIE['email']) == '') {

    exit;
}
?>

<head>
    <link href="../css/cabinetmaterialize/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/cabinetmaterialize/materialize.min.css" />
    <!-- <link type="text/css" rel="stylesheet" href="css/cabinetmaterialize/style.css" media="screen,projection" /> -->
</head>
<section>
    <div class="container">
        <div class="row">
            <div class="col l12 center-align">
                <h1 class="user-cabinet-header">Личний Кабинет</h1>
            </div>
            <div class="col l12  center-align">

            
            <div class="row">
                <div class="col l12">
                    <form>
                        <div class="row">

                            <div class="input-field col s6">
                                <img src="/images/logo/images.jpg" alt="" srcset="">
                            </div>
                            <div class="input-field col s6">
                                <input id="signup-name" type="text" class="validate">
                                <label class="active" for="signup-name">Имя</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="signup-pass" type="text" class="validate">
                                <label class="active" for="signup-pass">Пароль</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="signup-birthday" type="text" class="datepicker">
                                <label class="active" for="signup-birthday">День Рождения</label>
                            </div>
                            <div class="col l12">Пол:
                                <p>
                                    <label>
                                        <input name="group1" type="radio" checked />
                                        <span>Мужской</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input name="group1" type="radio" />
                                        <span>Женский</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" name="group1" type="radio" />
                                        <span>Другой</span>
                                    </label>
                                </p>
                            </div>


                            <!--id="signup-submit" -->
                            <!-- <button id="update-userd"
                                class=" waves-effect waves-light btn blue lighten-1">Update</button> -->
                        </div>
                        <input class="btn" type="submit" value="update" id="singup-submit">
                </div>

                </form>
            </div>
        </div>
        </div>
    </div>
    <style>
    .modal-show {
        display: none;
    }
    </style>
</section>