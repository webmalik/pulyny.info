<?php

return array(

    /* Основний контроллер */
    '' => 'site/index',
    'not-admin' => 'site/notadmin',
    '404' => 'site/404',

    /* Контролер чату  */
    'chat' => 'chat/index',

    /* Контролер розідлу "Підслухано" */
    'obeyed' => 'obeyed/index',

    /* Контролер оголошень */
    'advertisement' => 'advertisement/index',

    /* Контролер "Про Пулини" */
    'about' => 'about/index',

    /* Контролер зворотнього зв'язку */
    'feedback' => 'feedback/index',

    /* Контроллер користувача */
    'profile/([a-z,A-Z,1-9]+)' => 'user/profile/$1',
    'registration' => 'user/registration',
    'auth' => 'user/auth',
    'logout' => 'user/logout',

    /* Панель адміністратора */
    'admin' => 'admin/index',

    /*'computers' => 'computers/index',
    'computers/([a-z,A-Z,1-9]+)' => 'computers/view/$1',
    'computers/add' => 'computers/add',
    'computers/edit/([1-9]+)' => 'computers/edit/$1',
    'computers/delete/([a-z,A-Z,1-9]+)' => 'computers/delete/$1',
    'computers/addpo/([a-z,A-Z,1-9]+)' => 'computers/addpo/$1',*/





);