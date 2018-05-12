<div class="card">
    <div class="card-content">
        <span class="card-title">Редагування профілю</span>
        <?php
        if(isset($data['errors']) && is_array($data['errors'])) {
            ?>
            <div class="bs-callout bs-callout-danger">
                <h4>Помилка при редагуванні</h4>
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
                <h4>Ви успішно відредагували профіль!</h4>
            </div>
            <?php
        } else {
        ?>
        <form class="login_form" enctype="multipart/form-data" action="" method="post">
            <?php Form::addInputText("first_name", "Ваше ім'я", $data['user'])?>
            <?php Form::addInputText("last_name", "Ваше прізвище", $data['user'])?>
            <div class="file-field input-field">
                <div class="btn">
                    <span>Фото профілю</span>
                    <input type="file" name="image">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" name="edit_img" value="<?=$data['user']["image"]?>" type="text">
                </div>
            </div>
            <?php Form::addInputText("e_mail", "Ваш E-Mail", $data['user'])?>
            <?php } ?>
    </div>
        <? if(isset($data['result']) && $data['result']!= NULL) { ?>
            <div class="card-action">
                <a href="/profile/<?=$_SESSION['user_login']?>">Повернутись</a>
            </div>
            <?php
        } else {
            ?>
            <div class="card-action">
                <?php Form::addButtonSubmit("Редагувати")?>
                </form>
            </div>
            <?php
        }
        ?>

</div>
