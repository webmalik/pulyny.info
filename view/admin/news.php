<div class="article_add">
    <a href="/admin/news/add" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-plus"></i></a>
</div>
<? foreach ($news as $article) {?>
    <div class="col s12 article">
        <div class="col s3 article_img">
            <img src="<?=HOST?>/images/article-2.jpg" alt="">
        </div>
        <div class="col s9">
            <div class="article_title">
                <?=$article['title']?>
            </div>
            <div class="aricle_description">
                <?=$article['description']?>
            </div>
        </div>
    </div>
    <div class="col s12 article_menu">
        <a href="/admin/news/edit/<?=$article['name']?>"><i class="fa fa-edit left"></i>Редагувати</a>
        <a href="/admin/news/delete/<?=$article['name']?>"><i class="fa fa-trash left"></i>Видалити</a>
    </div>
<? } ?>


