<? foreach ($advertisements as $advertisement) {?>
    <div class="row">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title"><?=$advertisement['title']?></span>
                <div class="article_description">
                    <img src="<?=HOST.$advertisement['image']?>" alt="">
                    <span class="article_text">
                        <?=$advertisement['description']?>
                    </span>
                </div>
            </div>
            <div class="card-action">
                <a href="/admin/advertisement/edit/<?=$advertisement['slug']?>"><i class="fa fa-edit"></i>Редагувати</a>
                <a href="/admin/advertisement/delete/<?=$advertisement['slug']?>"><i class="fa fa-trash"></i>Видалити</a>
            </div>
        </div>
    </div>
<? } ?>


