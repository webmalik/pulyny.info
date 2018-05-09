<?php

return array(

    /* Основний контроллер */
    '' => 'site/index',
    '404' => 'site/404',
    'notrights' => 'site/notrights',

    /* Контролер новин */
    'news' => 'news/index',
    'news/([a-z,A-Z,1-9,-]+)'=>'news/view/$1',

    /* Контролер чату  */
    'chat' => 'chat/index',

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
    'admin/news' => 'admin/news',
    'admin/news/add'=>'admin/addnews/',
    'admin/news/edit/([a-z,A-Z,1-9,-]+)'=>'admin/editnews/$1',
    'admin/news/delete/([a-z,A-Z,1-9,-]+)'=>'admin/deletenews/$1',
);