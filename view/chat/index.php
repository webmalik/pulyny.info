<div class="main-panel chat">
    <div class="main-panel-header">
        Публічний чат
    </div>
    <div class="main-panel-content chat-window">
        <?php foreach ($messages as $message) {?>
        <?php $user = User::getUsersByChat($message['user_id'])?>
            <div class="chat-message">
                <div class="chat-message-img col s1">
                    <img src="<?=HOST?><?=$user[0]['image']?>" alt="">
                </div>
                <div class="chat-message-text s11">
                    <p><?=$user[0]['login']?></p>
                    <span><?=$message['message']?></span>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php if(isset($_SESSION['user_login'])) {?>
    <div class="chat-area">
        <textarea name="message" id="message" class="froala" cols="30" rows="100"></textarea>
    </div>
    <div class="chat-enter">
        <a href="#" id="send_chat" data-user="<?=$_SESSION['user_id']?>" class="btn waves-effect waves-light">Надіслати</a>
    </div>
    <?php } else {?>
    <div class="chat-access">
        <p>Ви не авторизовані. Для користування чатом, будь-ласка, авторизуйтесь...</p>
        <a href="/auth" class="btn waves-effect waves-light">Авторизація</a>
    </div>
    <?php }?>
</div>