<!--<h1>
    <?php /*print_r($news)*/?>
</h1>
<div class="col s12 m6">
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?/*=HOST*/?>/images/article-1.jpg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">ВЕСНЯНО-ПОЛЬОВІ РОБОТИ У РОЗПАЛІ<i class="fa fa-ellipsis-v right"></i></span>
        </div>
        <div class="card-reveal" style="display: none; transform: translateY(0%);">
            <span class="card-title grey-text text-darken-4">ВЕСНЯНО-ПОЛЬОВІ РОБОТИ У РОЗПАЛІ<i class="fa fa-times-circle right"></i></span>
            <p>Цього року початок весняно-польових робіт пов’язаних з посівом ярих культур розпочинається із значним запізнення в порівнянні з минулим роком. Оптимальні терміни посіву ярих зернових та зернобобових культур ще не втрачені, проте будуть стислими до двох тижнів. Цей факт змушує аграріїв пришвидшеними темпами проводити весь комплекс весняно-польових робіт. </p>
            <div class="card-action">
                <a href="#">Читати далі...</a>
            </div>
        </div>
        <div class="card-action">
            <a href="#">Читати далі...</a>
        </div>
    </div>
</div>-->
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
<!--<div class="col s12 m6">
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?/*=HOST*/?>/images/article-2.jpg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">ГАРНІ РЕЗУЛЬТАТИ НА ОБЛАСНИХ ЗМАГАННЯХ З ШАХІВ ТА ШАШОК<i class="fa fa-ellipsis-v right"></i></span>
        </div>
        <div class="card-reveal" style="display: none; transform: translateY(0%);">
            <span class="card-title grey-text text-darken-4"><i class="fa fa-times-circle right"></i>ГАРНІ РЕЗУЛЬТАТИ НА ОБЛАСНИХ ЗМАГАННЯХ З ШАХІВ ТА ШАШОК</span>
            <p>На базі Селянщинського спортивного ліцею 17 квітня пройшли змагання з шахів та шашок під девізом:"Хто ти, майбутній олімпієць?"
                Всі учасники змагань показали свою майстерність гри, хотіли тільки перемоги, але є переможці та переможені.</p>
            <div class="card-action">
                <a href="#">Читати далі...</a>
            </div>
        </div>
        <div class="card-action">
            <a href="#">Читати далі...</a>
        </div>
    </div>
</div>
<div class="col s12 m6">
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?/*=HOST*/?>/images/article-1.jpg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">ВЕСНЯНО-ПОЛЬОВІ РОБОТИ У РОЗПАЛІ<i class="fa fa-ellipsis-v right"></i></span>
        </div>
        <div class="card-reveal" style="display: none; transform: translateY(0%);">
            <span class="card-title grey-text text-darken-4">ВЕСНЯНО-ПОЛЬОВІ РОБОТИ У РОЗПАЛІ<i class="fa fa-times-circle right"></i></span>
            <p>Цього року початок весняно-польових робіт пов’язаних з посівом ярих культур розпочинається із значним запізнення в порівнянні з минулим роком. Оптимальні терміни посіву ярих зернових та зернобобових культур ще не втрачені, проте будуть стислими до двох тижнів. Цей факт змушує аграріїв пришвидшеними темпами проводити весь комплекс весняно-польових робіт. </p>
            <div class="card-action">
                <a href="#">Читати далі...</a>
            </div>
        </div>
        <div class="card-action">
            <a href="#">Читати далі...</a>
        </div>
    </div>
</div>-->