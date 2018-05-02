
<? foreach ($news as $article) {?>
<div class="col s12 m6">
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?=HOST?>/images/article-2.jpg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><?=$article['title']?><i class="fa fa-ellipsis-v right"></i></span>
        </div>
        <div class="card-reveal" style="display: none; transform: translateY(0%);">
            <span class="card-title grey-text text-darken-4"><i class="fa fa-times-circle right"></i><?=$article['title']?></span>
            <p><?=$article['description']?></p>
            <div class="card-action">
                <a href="/news/<?=strtolower($article['name'])?>">Читати далі...</a>
            </div>
        </div>
        <div class="card-action">
            <a href="/news/<?=strtolower($article['name'])?>">Читати далі...</a>
        </div>
    </div>
</div>
<? } ?>