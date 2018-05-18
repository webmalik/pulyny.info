<?php foreach ($advertisements as $advertisement) {?>
<div class="col s12 m6">
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light img_core">
            <img class="img_cut" src="<?=HOST.$advertisement['image']?>">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><?=$advertisement['title']?><i class="fa fa-ellipsis-v right"></i></span>
        </div>
        <div class="card-reveal" style="display: none; transform: translateY(0%);">
            <span class="card-title grey-text text-darken-4"><i class="fa fa-times-circle right"></i><?=$advertisement['title']?></span>
            <p><?=$advertisement['description']?></p>
            <div class="card-action">
                <a href="/advertisement/<?=strtolower($advertisement['slug'])?>">Читати далі...</a>
            </div>
        </div>
        <div class="card-action">
            <a href="/advertisement/<?=strtolower($advertisement['slug'])?>">Читати далі...</a>
        </div>
    </div>
</div>
<?php }?>