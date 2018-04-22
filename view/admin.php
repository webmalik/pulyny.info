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
    <link href="<?=HOST?>/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=HOST?>/template/css/materialize.min.css" rel="stylesheet">
    <link href="<?=HOST?>/template/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid admin-panel">
    <div class="row z-depth-2">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
        <div class="col s12 m6">
            <a href="#" class="logo">
                <img src="<?=HOST?>/template/img/Logo_prj-2.png" alt="">
            </a>
        </div>
        <div class="col s12 m6">

        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col s2">
                <ul class="admin-nav">
                    <li><a href="#">Новини</a></li>
                    <li><a href="#">Повідомлення</a></li>
                    <li><a href="#">Повідомлення</a></li>
                    <li><a href="#">Повідомлення</a></li>
                    <li><a href="#">Повідомлення</a></li>
                </ul>
            </div>
            <div class="col s10">
                <?=$content?>
            </div>
        </div>

    </div>


    <footer class="admin-footer">
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

</body>
</html>