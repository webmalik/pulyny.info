<div class="card blue-grey darken-1">
    <div class="card-content white-text">
        <span class="card-title">Зареєстровані користувачі</span>
        <?php foreach ($data['users_info'] as $user) {?>
        <div class="card blue-grey darken-3 user_list_admin">
            <div class="card-content">
                <div class="users_id_admin">
                    <?=$user['id']?>
                </div>
                <div class="user_img_admin">
                    <img src="<?= HOST ?><?=$user['image']?>" alt="">
                </div>
                <div class="user_info_admin">
                    <p><b>Login: </b><?=$user['login']?></p>
                    <p><b>Ім'я: </b><?=$user['first_name']?> <?=$user['last_name']?></p>
                    <p><b>Статус: </b>
                        <?php
                        if($user['block'] == 0)
                            echo "Активний";
                        else echo "Заблокований";
                        ?>
                    </p>
                </div>
                <div class="card-action">
                    <?php
                    if($user['block'] == 0) {
                        ?>
                        <a href="/admin/users/block/<?=$user['login']?>">Блокувати</a>
                        <?php
                    }
                    else {
                    ?>
                        <a href="/admin/users/unblock/<?=$user['login']?>">Розблокувати</a>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>