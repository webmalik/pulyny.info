<!DOCTYPE html>
<html lang="ua">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title><?=$data['page']['title']?> - Пулини.info</title>
    <meta name="description" content="<?=$data['page']['meta_description']?>"/>
    <meta name="keywords" content="<?=$data['page']['meta_keywordsф']?>"/>
    <!-- Styles -->
    <link href="<?=HOST?>/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=HOST?>/template/css/materialize.min.css" rel="stylesheet">
    <link href="<?=HOST?>/template/css/style.css" rel="stylesheet">

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
        <div class="col s12 m6">
            <a href="#" class="logo">
                <img src="<?=HOST?>/template/img/logo.png" alt="">
            </a>
        </div>
        <div class="col s12 m6">
            <div class="user">
                <?php if(isset($_SESSION['user_id'])) {?>
                <div class="user_info">
                    <span <?php if(isset($_SESSION['user_admin']))echo "style=\"color: #00b0ff\""?> ><?php echo $_SESSION['user_lname']?> <?=$_SESSION['user_fname']?> (<?=$_SESSION['user_login']?>)</span>
                    <a class="waves-effect waves-teal" href="/profile/<?php if(isset($_SESSION['user_login'])) echo $_SESSION['user_login'];?>">Профіль</a>
                    <a class="waves-effect waves-teal" href="/logout">Вихід</a>
                </div>
                <div class="user_img">
                    <img src="<?= HOST ?><?=$_SESSION['user_image']?>" alt="">
                </div>
                <?php }else {?>
                <div class="user_auth">
                    <a class="waves-effect waves-teal" href="/registration">Реєстрація</a>
                    <a class="waves-effect waves-teal" href="/auth">Вхід</a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 header-nav">
            <nav>
                <div class="col-sm-12 col-md-10 nav-wrapper center-block">
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                        <i class="fa fa-bars"></i>
                    </a>
                    <ul class="left hide-on-med-and-down">
                        <li <?php if($_SERVER['REQUEST_URI'] == "/") {?> class="active"<?php }?>><a href="/">Новини</a></li>
                        <li <?php if($_SERVER['REQUEST_URI'] == "/chat"){?> class="active"<?php }?>><a href="/chat">Публічний чат</a></li>
                        <li <?php if($_SERVER['REQUEST_URI'] == "/advertisement"){?> class="active"<?php }?>><a href="/advertisement">Оголошення</a></li>
                        <li <?php if($_SERVER['REQUEST_URI'] == "/about"){?> class="active"<?php }?>><a href="/about">Про Пулини</a></li>
                        <li <?php if($_SERVER['REQUEST_URI'] == "/feedback"){?> class="active"<?php }?>><a href="/feedback">Зворотній зв'язок</a></li>
                    </ul>
                </div>
            </nav>
            <ul class="sidenav" id="mobile-demo">
                <li <?php if($_SERVER['REQUEST_URI'] == "/") {?> class="active"<?php }?>><a href="/">Новини</a></li>
                <li <?php if($_SERVER['REQUEST_URI'] == "/chat"){?> class="active"<?php }?>><a href="/chat">Публічний чат</a></li>
                <li <?php if($_SERVER['REQUEST_URI'] == "/advertisement"){?> class="active"<?php }?>><a href="/advertisement">Оголошення</a></li>
                <li <?php if($_SERVER['REQUEST_URI'] == "/about"){?> class="active"<?php }?>><a href="/about">Про Пулини</a></li>
                <li <?php if($_SERVER['REQUEST_URI'] == "/feedback"){?> class="active"<?php }?>><a href="/feedback">Зворотній зв'язок</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m9">
                <?=$content?>
            </div>
            <div class="col s12 m3">
                <div class="main-panel">
                    <div class="main-panel-header ">
                        Погода в Пулинах
                    </div>
                    <div class="main-panel-content">
                        <div id="SinoptikInformer" class="SinoptikInformer type1c1"><div class="siHeader"><div class="siLh"><div class="siMh"><a onmousedown="siClickCount();" class="siLogo" href="https://ua.sinoptik.ua/" target="_blank" rel="nofollow" title="Погода"> </a>Погода <span id="siHeader"></span></div></div></div><div class="siBody"><a onmousedown="siClickCount();" href="https://ua.sinoptik.ua/погода-пулини" title="Погода у Пулинах" target="_blank"><div class="siCity"><div class="siCityName"><span>Пулини</span></div><div id="siCont0" class="siBodyContent"><div class="siLeft"><div class="siTerm"></div><div class="siT" id="siT0"></div><div id="weatherIco0"></div></div><div class="siInf"><p>вологість: <span id="vl0"></span></p><p>тиск: <span id="dav0"></span></p><p>вітер: <span id="wind0"></span></p></div></div></div></a><div class="siLinks">Погода на 10 днів від <a href="https://ua.sinoptik.ua/погода-пулини/10-днів" title="Погода на 10 днів" target="_blank" onmousedown="siClickCount();">sinoptik.ua</a></div></div><div class="siFooter"><div class="siLf"><div class="siMf"></div></div></div></div><script type="text/javascript" charset="UTF-8" src="//sinoptik.ua/informers_js.php?title=4&amp;wind=3&amp;cities=303028575&amp;lang=ua"></script>
                    </div>
                <div class="main-panel">
                    <div class="main-panel-header ">
                    Останні оголошення
                </div>
                </div>
                    <div class="main-panel-content">
                    <?php
                        $advertisement = Advertisement::getAllDescAdvertisementLimit();
                        foreach ($advertisement as $adver) {
                    ?>
                        <div class="last-advertisement">
                            <p style="font-weight: bold;"><?=$adver['title']?></p>
                            <br>
                            <p><?=$adver['description']?></p>
                            <a href="/advertisement/<?=$adver['slug']?>">Читати</a>
                            <hr>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer">
        <div class="footer">
            <div class="row z-depth-2">
                <div class="col s12 m6 left-align">
                    &copy <?php echo date('Y')?> Copyright Text
                </div>
                <div class="col s12 m6 right-align">
                    Powered by <a href="#">WebMaLik</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- SCRIPTS -->
<script type="text/javascript" src="<?=HOST?>/template/js/jquery.min.js"></script>

<!-- Materialize JS -->
<script type="text/javascript" src="<?=HOST?>/template/js/materialize.min.js"></script>
<script type="text/javascript" src="<?=HOST?>/template/js/main.js"></script>
<script type="text/javascript" src="<?=HOST?>/template/js/ajax.js"></script>
<script type="text/javascript" src="<?=HOST?>/template/js/translit.js"></script>
<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>
</body>
</html>