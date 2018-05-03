<div class="row">
    <div class="col s12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Додавання нової статьї</span>
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
                if(isset($result) && $result != 0) {
                    ?>
                    <div class="bs-callout bs-callout-success">
                        <h4>Успішне додавання</h4>
                        <p>Ви успішно додали статью до бази даних <b><?=$result?> </b></p>
                    </div>
                    <?php
                } else {
                    ?>
                    <form class="login_form" enctype="multipart/form-data" action="" method="post">
                        <?php Form::addInputText("title", "Назва")?>
                        <?php Form::addInputText("description", "Короткий зміст")?>
                        <textarea name="text" id="" class="froala" cols="30" rows="100"></textarea>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Файл</span>
                                <input type="file" name="image">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <?php Form::addInputText("meta_description", "Мета опис")?>
                        <?php Form::addInputText("meta_keywords", "Мета ключові слова")?>
                <?php }?>
            </div>
            <div class="card-action">
                <?php Form::addButtonSubmit("Додати статью")?>
                    </form>
            </div>
        </div>
    </div>
</div>
<!--
<div class="panel panel-success ">
    <div class="panel-heading">
        <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">
        <?php
/*        if(isset($errors) && is_array($errors)) {
            */?>
            <div class="bs-callout bs-callout-danger">
                <h4>Помилка при додаванні</h4>
                <?php
/*                foreach ($errors as $error) {
                    echo "<p> - ".$error."</p>";
                }
                */?>
            </div>
            <?php
/*        }
        if(isset($result) && $result != 0) {
            */?>
            <div class="bs-callout bs-callout-success">
                <h4>Успішне додавання</h4>
                <p>Ви успішно додали статью до бази даних <b><?/*=$result*/?> </b></p>
            </div>
            <?php
/*        } else {
            */?>
            <form class="login_form" action="" method="post">
                <?php /*Form::addInputText("title", "Назва")*/?>
                <?php /*Form::addInputText("description", "Короткий зміст")*/?>
                <?php /*Form::addInputText("text", "Текст")*/?>
                <?php /*Form::addInputText("image", "Зображення")*/?>
                <?php /*Form::addInputText("meta_description", "Мета опис")*/?>
                <?php /*Form::addInputText("meta_keywords", "Мета ключові слова")*/?>
                <?php /*Form::addButtonSubmit("Додати статью")*/?>
            </form>
        <?php /*}*/?>
    </div>
</div>-->