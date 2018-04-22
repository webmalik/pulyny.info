<? foreach ($article as $item) {?>
<div class="col s12">
    <h1><?=$item['title']?></h1>
    <img class="activator" src="<?=HOST?>/images/article-2.jpg">
    <?=$item['text']?>
</div>
<? } ?>