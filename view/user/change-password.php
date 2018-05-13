<div class="card">
    <div class="card-content">
        <span class="card-title">Зміна паролю</span>
        <?php
        if(isset($data['errors']) && is_array($data['errors'])) {
            ?>
            <div class="bs-callout bs-callout-danger">
                <h4>Помилка при зміні паролю</h4>
                <?php
                foreach ($data['errors'] as $error) {
                    echo "<p> - ".$error."</p>";
                }
                ?>
            </div>
            <?php
        }
        if(isset($data['result']) && $data['result'] != NULL) {
            ?>
            <div class="bs-callout bs-callout-danger">
                <h4>Ви успішно змінили пароль!</h4>
            </div>
            <?php
        } else {
        ?>
        <form class="login_form" enctype="multipart/form-data" action="" method="post">
            <?php Form::addInputPass("password", "Пароль")?>
            <?php Form::addInputPass("password_d", "Повторіть пароль")?>
            <?php if(User::checkLoggedAdmin()) {
                Form::addCheckBox("Задайте новий pin-код", "is_admin")?>
                <div class="pin">
                    <?php Form::addInputPass("pin", "Pin-код")?>
                </div>
            <?php }
            }?>
    </div>
        <? if(isset($data['result']) && $data['result']!= NULL) { ?>
            <div class="card-action">
                <a href="/profile/<?=$_SESSION['user_login']?>">Повернутись</a>
            </div>
            <?php
        } else {
            ?>
            <div class="card-action">
                <?php Form::addButtonSubmit("Змінити пароль")?>
                </form>
            </div>
            <?php
        }
        ?>

</div>
