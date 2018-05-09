<? foreach ($article as $item) {?>
<div class="col s12 article_view">
    <h1><?=$item['title']?></h1>
    <img class="activator" src="<?=HOST.$item['image']?>">
    <?=$item['text']?>
</div>
<? } ?>