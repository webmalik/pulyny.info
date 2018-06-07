<?php if(!User::checkLoggedAdmin()){
    header("Location: /notrights");
}?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Панель адміністратора - Пулини.info</title>
    <!-- Styles -->
    <link href="<?=HOST?>/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=HOST?>/template/css/materialize.min.css" rel="stylesheet">
    <link href="<?=HOST?>/template/css/style.css" rel="stylesheet">

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container-fluid admin-panel">
    <div class="z-depth-2 admin-header row">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
        <div class="col s12 m6">
            <a href="#" class="logo">
                <img src="<?=HOST?>/template/img/Logo_prj-2.png" alt="">
            </a>
        </div>
        <div class="col s12 m6">
            <div class="user">
                <?php if(isset($_SESSION['user_id'])) {?>
                    <div class="user_info">
                        <span <?php if(isset($_SESSION['user_admin']))echo "style=\"color: #00b0ff\""?> ><?php echo $_SESSION['user_lname']?> <?=$_SESSION['user_fname']?> (<?=$_SESSION['user_login']?>)</span>
                        <a class="waves-effect waves-teal" target="_blank" href="/">Відкрити сайт</a>
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
        <div class="col s12 m2">
            <ul class="admin-nav">
                <li><a href="/admin/news">Новини</a></li>
                <li><a href="/admin/users">Користувачі</a></li>
                <li><a href="/admin/advertisement">Оголошення</a></li>
                <li><a href="/admin/pages">Сторінки сайту</a></li>
            </ul>
        </div>
        <div class="col s12 m10 admin-container">
            <?=$content?>
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

<!-- Include jQuery lib. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Materialize JS -->
<script type="text/javascript" src="<?=HOST?>/template/js/materialize.min.js"></script>
<script type="text/javascript" src="<?=HOST?>/template/js/main.js"></script>
<script type="text/javascript" src="<?=HOST?>/template/js/translit.js"></script>
<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>

</body>
</html>