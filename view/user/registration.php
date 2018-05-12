<div class="card">
    <div class="card-content">
        <span class="card-title">Реєстрація</span>
        <?php
        if(isset($data['errors']) && is_array($data['errors'])) {
            ?>
            <div class="bs-callout bs-callout-danger">
                <h4>Помилка при реєстрації</h4>
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
                <h4>Ви успішно зареєструвались!</h4>
            </div>
            <?php
        } else {
        ?>
        <form class="login_form" enctype="multipart/form-data" action="" method="post">
            <?php Form::addInputText("login", "Логін")?>
            <?php Form::addInputPass("password", "Пароль")?>
            <?php Form::addInputText("first_name", "Ваше ім'я")?>
            <?php Form::addInputText("last_name", "Ваше прізвище")?>
            <?php Form::addInputText("e_mail", "Ваш E-Mail")?>
            <?php if(User::checkLoggedAdmin()) {
                    Form::addCheckBox("Це адміністратор?", "is_admin")?>
                    <div class="pin">
                        <?php Form::addInputPass("pin", "Pin-код")?>
                    </div>
            <?php }
            }?>
    </div>
        <? if(isset($data['result']) && $data['result']!= NULL) { ?>
            <div class="card-action">
                <a href="/auth">Увійти</a>
            </div>
            <?php
        } else {
            ?>
            <div class="card-action">
                <?php Form::addButtonSubmit("Реєстрація")?>
                </form>
            </div>
            <?php
        }
        ?>

</div>
