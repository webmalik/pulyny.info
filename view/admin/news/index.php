<div class="article_add">
    <a href="/admin/news/add" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-plus"></i></a>
</div>
<? foreach ($news as $article) {?>
    <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title"><?=$article['title']?></span>
                <div class="article_description">
                    <img src="<?=HOST.$article['image']?>" alt="">
                    <span class="article_text">
                        <?=$article['description']?>
                    </span>
                </div>
            </div>
            <div class="card-action">
                <a href="/admin/news/edit/<?=$article['name']?>"><i class="fa fa-edit"></i>Редагувати</a>
                <a href="/admin/news/delete/<?=$article['name']?>"><i class="fa fa-trash"></i>Видалити</a>
            </div>
        </div>
    </div>
<? } ?>


