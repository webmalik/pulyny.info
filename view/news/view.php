<? foreach ($data['article'] as $item) {?>
<div class="col s12 article_view">
    <h1><?=$item['title']?></h1>
    <img class="activator" src="<?=HOST.$item['image']?>">
    <?=$item['text']?>
</div>
<div class="col s12 article_comments">
    <h1>Коментарі</h1>
    <hr>
    <div class="add_comments">
        <?php if(isset($_SESSION['user_login'])) {?>
            <div class="comments-area">
                <textarea name="message" id="message" class="froala" cols="30" rows="100"></textarea>
            </div>
            <div class="comments-enter">
                <a href="#" id="send_comments" data-article = "<?=$item['id']?>" data-user="<?=$_SESSION['user_id']?>" class="btn waves-effect waves-light">Додати коментар</a>
            </div>
        <?php } else {?>
            <div class="comments-access">
                <p>Ви не авторизовані. Для додавання коментраів, будь-ласка, авторизуйтесь...</p>
                <a href="/auth" class="btn waves-effect waves-light">Авторизація</a>
            </div>
        <?php }?>
    </div>
    <div class="comments-block">
        <?php
        if (isset($data['comments']) && $data['comments'] != NULL) {
            foreach ($data['comments'] as $comment) {
                $user = User::getUserById($comment['user']);
                $time = strtotime($comment['date']);
                $date = date("H:i d.m.Y", $time);
                ?>
                <div class="comments-message">
                    <div class="comments-message-img col s1">
                        <img src="<?=HOST?><?=$user[0]['image']?>" alt="">
                    </div>
                    <div class="comments-message-text s11">
                        <p class="com_user_info"><?=$user[0]['login']?> <span><?=$date?></span></p>
                        <span><?=$comment['text']?></span>
                    </div>
                </div>
            <?php }
        }else {
            ?>
            <h2>До цієї статті ще не було коментарів...</h2>
            <?php
        }
        ?>
    </div>
</div>
<? } ?>