<div class="row">
    <div class="col s12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Додавання нової сторінки</span>
                <?php
                if(isset($data['errors']) && is_array($data['errors'])) {
                    ?>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Помилка при додаванні</h4>
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
                    <div class="bs-callout bs-callout-success">
                        <h4>Успішне додавання</h4>
                        <p>Ви успішно додали сторінку до бази даних <b></p>
                    </div>
                    <?php
                } else {
                    ?>
                    <form class="login_form" enctype="multipart/form-data" action="" method="post">
                        <div class="input-field">
                            <input type="text" name="title" onkeyup="translit()">
                            <label for="title">Назва</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="name" id="article_name">
                            <label for="description" class="active">Аліас</label>
                        </div>
                        <textarea name="text" id="" class="froala" cols="30" rows="100"></textarea>
                        <?php Form::addInputText("meta_description", "Мета опис")?>
                        <?php Form::addInputText("meta_keywords", "Мета ключові слова")?>
                <?php }?>
            </div>
            <? if(isset($data['result']) && $data['result'] != NULL) { ?>
                <div class="card-action">
                    <a href="/admin/pages/edit/"></i>Повернутись</a>
                </div>
                <?php
                } else {
            ?>
            <div class="card-action">
                <?php Form::addButtonSubmit("Додати сторінку")?>
                    </form>
            </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>