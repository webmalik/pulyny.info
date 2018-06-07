<div class="row">
    <div class="col s12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Редагування сторінки</span>
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
                    <div class="bs-callout bs-callout-success">
                        <h4>Редагування успішне</h4>
                        <p>Ви успішно відредагували сторінку із бази даних <b></p>
                    </div>
                    <?php
                } else {
                    ?>
                    <form class="login_form" enctype="multipart/form-data" action="" method="post">
                        <div class="input-field">
                            <input type="text" name="title" onkeyup="translit()" value="<?=$data['page'][0]["title"]?>">
                            <label for="title" class="active">Назва</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="name" id="article_name" value="<?=$data['page'][0]["name"]?>">
                            <label for="description" class="active">Аліас</label>
                        </div>
                        <textarea name="text" id="" class="froala" cols="30" rows="100">
                            <?=$data['page'][0]["text"]?>
                        </textarea>
                        <?php Form::addInputText("meta_description", "Мета опис",$data['page'][0])?>
                        <?php Form::addInputText("meta_keywords", "Мета ключові слова",$data['page'][0])?>
                <?php }?>
            </div>
            <? if(isset($data['result']) && $data['result'] != NULL) { ?>
                <div class="card-action">
                    <a href="/admin/pages/edit/">Повернутись</a>
                </div>
                <?php
            } else {
                ?>
                <div class="card-action">
                    <?php Form::addButtonSubmit("Редагувати сторінку")?>
                    </form>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>