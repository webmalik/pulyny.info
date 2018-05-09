<div class="card">
    <div class="card-content">
        <span class="card-title">Авторизація</span>
        <?php
        if(isset($data['errors']) && is_array($data['errors'])) {
            ?>
            <div class="bs-callout bs-callout-danger">
                <h4>Помилка при авторизації</h4>
                <?php
                foreach ($data['errors'] as $error) {
                    echo "<p> - ".$error."</p>";
                }
                ?>
            </div>
            <?php
        }
        if(isset($data['result']) && $data['result'] != NULL) {
            header("Location: /");
        } else {
        ?>
        <form class="login_form" enctype="multipart/form-data" action="" method="post">
            <?php Form::addInputText("login", "Логін")?>
            <?php Form::addInputPass("password", "Пароль")?>
            <?php Form::addCheckBox("Ви адміністратор?", "is_admin")?>
            <div class="pin">
                <?php Form::addInputPass("pin", "Pin-код")?>
            </div>
            <?php }?>
    </div>
    <div class="card-action">
        <?php Form::addButtonSubmit("Авторизація")?>
        </form>
    </div>
</div>
