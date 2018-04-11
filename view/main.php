<!DOCTYPE html>
<html lang="ua">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Пулини.info</title>
    <!-- Styles -->
    <link href="<?=HOST?>/template/css/style.css" rel="stylesheet">
    <link href="<?=HOST?>/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=HOST?>/template/css/materialize.min.css" rel="stylesheet">
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

        </div>
    </div>
    <div class="row">
        <div class="col-12 header-nav">
            <nav>
                <div class="col-sm-12 col-md-10 nav-wrapper center-block">
                    <a href="#" data-activates="mobile-demo" class="button-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                    <ul class="left hide-on-med-and-down">
                        <li class="active"><a href="#">Новини</a></li>
                        <li><a href="#">Публічний чат</a></li>
                        <li><a href="#">Підслухано</a></li>
                        <li><a href="#">Всезнайка</a></li>
                        <li><a href="#">Оголошення</a></li>
                        <li><a href="#">Магазини</a></li>
                        <li><a href="#">Конакти</a></li>
                    </ul>
                    <ul class="side-nav left" id="mobile-demo" style="transform: translateX(0px);">
                        <li class="active"><a href="#">Новини</a></li>
                        <li><a href="#">Оголошення</a></li>
                        <li><a href="#">Публічний чат</a></li>
                        <li><a href="#">Підслухано в Пулинах</a></li>
                        <li><a href="#">Магазини</a></li>
                        <li><a href="#">Всезнайка</a></li>
                        <li><a href="#">Конакти</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col s4">

            </div>
            <div class="col s12">
                <?=$content?>
            </div>
        </div>

    </div>

    <div class="footer">
        <div class="row z-depth-2">
            <div class="col s12 m6 left-align">
                &copy <?php echo date('Y')?> Copyright Text
            </div>
            <div class="col s12 m6 right-align">
                Powered by <a href="#">WebMaLik</a>
            </div>
        </div>
    </div>s
</div>

<!-- SCRIPTS -->
<script type="text/javascript" src="<?=HOST?>/template/js/jquery.min.js"></script>

<!-- Materialize JS -->
<script type="text/javascript" src="<?=HOST?>/template/js/materialize.min.js"></script>
<script type="text/javascript" src="<?=HOST?>/template/js/main.js"></script>

</body>
</html>