<div class="row">
    <div class="col s12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Редагування оголошення</span>
                <?php
                if(isset($errors) && is_array($errors)) {
                    ?>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Помилка при редагуванні</h4>
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
                        <h4>Редагування успішне</h4>
                        <p>Ви успішно відредагували оголошення із бази даних <b></p>
                    </div>
                    <?php
                } else {
                    ?>
                    <form class="login_form" enctype="multipart/form-data" action="" method="post">
                        <div class="input-field">
                            <input type="text" name="title" onkeyup="translit()" value="<?=$advertisement[0]["title"]?>">
                            <label for="title" class="active">Назва</label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="slug" id="article_name" value="<?=$advertisement[0]["slug"]?>">
                            <label for="description" class="active">Аліас</label>
                        </div>
                        <?php Form::addInputText("description", "Короткий зміст",$advertisement[0])?>
                        <textarea name="text" id="" class="froala" cols="30" rows="100">
                            <?=$advertisement[0]["text"]?>
                        </textarea>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Файл</span>
                                <input type="file" name="image" value="<?=$advertisement[0]["image"]?>">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="edit_img" value="<?=$advertisement[0]["image"]?>" type="text">
                            </div>
                        </div>
                <?php }?>
            </div>
            <? if(isset($result) && $result != NULL) { ?>
                <div class="card-action">
                    <a href="/admin/advertisement/edit/"><i class="fa fa-edit"></i>Повернутись</a>
                </div>
                <?php
            } else {
                ?>
                <div class="card-action">
                    <?php Form::addButtonSubmit("Редагувати статью")?>
                    </form>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>