<div class="article_add">
    <a href="/admin/pages/add" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-plus"></i></a>
</div>
<? foreach ($pages as $page) {?>
    <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title"><?=$page['title']?></span>
                <div class="article_description">
                    <span class="article_text">
                        <?=$page['name']?>
                    </span>
                </div>
            </div>
            <div class="card-action">
                <a href="/admin/pages/edit/<?=$page['name']?>"><i class="fa fa-edit"></i>Редагувати</a>
                <a href="/admin/pages/delete/<?=$page['name']?>"><i class="fa fa-trash"></i>Видалити</a>
            </div>
        </div>
    </div>
<? } ?>


