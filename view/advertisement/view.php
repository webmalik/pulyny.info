<?php foreach ($advertisements as $advertisement) {?>
<div class="col s12 article_view">
    <h1><?=$advertisement['title']?></h1>
    <img class="activator" src="<?=HOST.$advertisement['image']?>">
    <?=$advertisement['text']?>
</div>
<? } ?>