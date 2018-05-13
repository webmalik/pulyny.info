<div class="main-panel chat">
    <div class="main-panel-header">
        Публічний чат
    </div>
    <div class="main-panel-content chat-window">
        <div class="chat-message">
            <div class="chat-message-img col s1">
                <img src="<?=HOST?><?=$_SESSION['user_image']?>" alt="">
            </div>
            <div class="chat-message-text s11">
                <p><?=$_SESSION['user_login']?></p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusantium autem blanditiis culpa dicta, doloremque dolores ducimus eius exercitationem itaque laudantium non nostrum omnis qui, quia quisquam repudiandae voluptatem.</span>
            </div>
        </div>
        <div class="chat-message">
            <div class="chat-message-img col s1">
                <img src="<?=HOST?><?=$_SESSION['user_image']?>" alt="">
            </div>
            <div class="chat-message-text s11">
                <p><?=$_SESSION['user_login']?></p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusantium autem blanditiis culpa dicta, doloremque dolores ducimus eius exercitationem itaque laudantium non nostrum omnis qui, quia quisquam repudiandae voluptatem.</span>
            </div>
        </div>
    </div>
    <?php if(isset($_SESSION['user_login'])) {?>
    <div class="chat-area">
        <textarea name="text" id="" class="froala" cols="30" rows="100"></textarea>
    </div>
    <div class="chat-enter">
        <a href="#" class="btn waves-effect waves-light">Надіслати</a>
    </div>
    <?php } else {?>
    <div class="chat-access">
        <p>Ви не авторизовані. Для користування чатом, будь-ласка, авторизуйтесь...</p>
        <a href="/auth" class="btn waves-effect waves-light">Авторизація</a>
    </div>
    <?php }?>
</div>