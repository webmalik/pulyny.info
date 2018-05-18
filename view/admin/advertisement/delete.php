<div class="row">
    <div class="col s12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Видалення статьї</span>
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
                if(isset($result) && $result == 1) {
                    ?>
                    <div class="bs-callout bs-callout-success">
                        <h4>Успішне видалення</h4>
                        <p>Ви успішно видалили статтю із нашої бази даних... </p>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="bs-callout bs-callout-warning">
                        <h4>Ви дійсно хочете видалити статтю із нашої бази даних?</h4>
                    </div>
                    <form class="login_form" action="" method="post">
                <?php }?>
            </div>
            <?php if(isset($result) && $result == 1) {
                ?>
                <div class="card-action">
                    <a href="/admin/news/edit/" class="btn btn-default">Повернутись</a>
                </div>
                <?php
                } else {
            ?>
            <div class="card-action">
                <?php Form::addButtonSubmit("Видалити статтю")?>
                <a href="/admin/news/edit/"><i class="fa fa-edit"></i>Повернутись</a>
                    </form>
            </div>
            <? }?>
        </div>
    </div>
</div>