<div class="col s12">
    <div class="card">
        <div class="card-content">
            <span class="card-title">Додати оголошення</span>
            <?php
            if(isset($errors) && is_array($errors)) {
                ?>
                <div class="bs-callout bs-callout-danger">
                    <h4>Помилка при додаванні</h4>
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
                    <h4>Додавання успішне</h4>
                    <p>Ви успішно додали оголошення в базу даних <b></p>
                </div>
                <?php
            } else {
            ?>
            <form class="login_form" enctype="multipart/form-data" action="" method="post">
                <div class="input-field">
                    <input type="text" name="title" onkeyup="translit()" ">
                    <label for="title" class="active">Назва</label>
                </div>
                <div class="input-field">
                    <input type="hidden" name="slug" id="article_name" value="">
                </div>
                <?php Form::addInputText("description", "Короткий зміст")?>
                <textarea name="text" id="" class="froala" cols="30" rows="100"></textarea>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Файл</span>
                        <input type="file" name="image" value="">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" name="edit_img" value="" type="text">
                    </div>
                </div>
                <?php }?>
        </div>
        <? if(isset($result) && $result != NULL) { ?>
            <div class="card-action">
                <a href="/advertisement/"><i class="fa fa-edit"></i>Повернутись</a>
            </div>
            <?php
        } else {
            ?>
            <div class="card-action">
                <?php Form::addButtonSubmit("Додати оголошення")?>
                </form>
            </div>
            <?php
        }
        ?>
    </div>
</div>
