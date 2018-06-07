<div class="col s12">
    <div class="card">
        <div class="card-content">
            <span class="card-title">Написати адміністрації</span>
            <?php
            if(isset($errors) && is_array($errors)) {
                ?>
                <div class="bs-callout bs-callout-danger">
                    <h4>Помилка при надсиланні повідомлення</h4>
                    <?php
                    foreach ($errors as $error) {
                        echo "<p> - ".$error."</p>";
                    }
                    ?>
                </div>
                <?php
            }
            if(isset($result) && $result != NULL) {
                ?>
                <div class="bs-callout bs-callout-success">
                    <h4>Надсилання успішне</h4>
                    <p>Ви успішно надіслали лист адмніністрації сайту<b></p>
                </div>
                <?php
            } else {
            ?>
            <form class="login_form" enctype="multipart/form-data" action="" method="post">
                <?php Form::addInputText("name", "Ваше прізвище та ім'я*")?>
                <?php Form::addInputText("e_mail", "Ваш e-mail*")?>
                <?php Form::addInputText("subject", "Тема повідомлення*")?>
                <label for="text" class="active">Текст повідомлення:*</label><br><br>
                <textarea name="text" id="text" class="froala" cols="30" rows="100"></textarea>
                <?php }?>
        </div>
        <? if(isset($result) && $result != NULL) { ?>
            <div class="card-action">
                <a href="/feedback/"><i class="fa fa-edit"></i>Повернутись</a>
            </div>
            <?php
        } else {
            ?>
            <div class="card-action">
                <?php Form::addButtonSubmit("Надіслати повідомлення")?>
                </form>
            </div>
            <?php
        }
        ?>
    </div>
</div>
