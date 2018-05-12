<div class="card">
    <div class="card-content">
        <span class="card-title">Профіль користувача - <?=$data['lname']?> <?=$data['fname']?> (id: <?=$data['id']?>)</span>
        <div class="profile">
            <div class="profile_img">
                <img src="<?=$data['image']?>">
            </div>
            <div class="profile_info">
                <div class="profile_block_info">
                    <p>Логін:</p>
                    <span><?=$data['login']?></span>
                </div>
                <div class="profile_block_info">
                    <p>Ім'я:</p>
                    <span><?=$data['fname']?></span>
                </div>
                <div class="profile_block_info">
                    <p>Прізвище:</p>
                    <span><?=$data['lname']?></span>
                </div>
                <div class="profile_block_info">
                    <p>E-Mail:</p>
                    <span><?=$data['email']?></span>
                </div>
                <div class="profile_block_info">
                    <p>Статус:</p>
                    <span>
                        <?php
                        if($data['block'] == 0) {
                            echo "Активний";
                        }else {
                            echo "Заблокований";
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == $data['login']) { ?>
    <div class="card-action">
        <a href="/profile/edit/<?=$data['login']?>">Редагувати</a>
        <a href="/profile/change-password/<?=$data['login']?>">Змінити пароль</a>
    </div>
    <?php } ?>
</div>
