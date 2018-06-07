<?php

return array(

    /* Основний контроллер */
    '' => 'site/index',
    '404' => 'site/404',
    'notrights' => 'site/notrights',

    /* Контролер новин */
    'news' => 'news/index',
    'news/([a-z,A-Z,1-9,-]+)'=>'news/view/$1',

    'comments/add/([a-z,A-Z,1-9,-]+)' => 'comments/add/$1',
    'comments/refresh' => 'comments/refresh',

    /* Контролер чату  */
    'chat' => 'chat/index',
    'chat/add/([a-z,A-Z,1-9,-]+)' => 'chat/add/$1',
    'chat/refresh' => 'chat/refresh',

    /* Контролер оголошень */
    'advertisement' => 'advertisement/index',
    'advertisement/add'=>'advertisement/add',
    'advertisement/view/([a-z,A-Z,1-9,-]+)'=>'advertisement/view/$1',

    /* Контролер "Про Пулини" */
    'about' => 'about/index',

    /* Контролер зворотнього зв'язку */
    'feedback' => 'feedback/index',

    /* Контроллер користувача */
    'profile/([a-z,A-Z,1-9]+)' => 'user/profile/$1',
    'profile/edit/([a-z,A-Z,1-9]+)' => 'user/profile_edit/$1',
    'profile/change-password/([a-z,A-Z,1-9]+)' => 'user/profile_change_password/$1',
    'registration' => 'user/registration',
    'auth' => 'user/auth',
    'logout' => 'user/logout',

    /* Панель адміністратора */
    'admin' => 'admin/index',
    'admin/news' => 'admin/news',
    'admin/news/add'=>'admin/addnews/',
    'admin/news/edit/([a-z,A-Z,1-9,-]+)'=>'admin/editnews/$1',
    'admin/news/delete/([a-z,A-Z,1-9,-]+)'=>'admin/deletenews/$1',

    'admin/advertisement' => 'admin/advertisement',
    'admin/advertisement/edit/([a-z,A-Z,1-9,-]+)'=>'admin/editadvertisement/$1',
    'admin/advertisement/delete/([a-z,A-Z,1-9,-]+)'=>'admin/deleteadvertisement/$1',

    'admin/users'=>'admin/users',
    'admin/users/block/([a-z,A-Z,1-9,-]+)'=>'admin/users_block/$1',
    'admin/users/unblock/([a-z,A-Z,1-9,-]+)'=>'admin/users_unblock/$1',

    'admin/pages' => 'admin/pages',
    'admin/pages/add'=>'admin/addpages/',
    'admin/pages/edit/([a-z,A-Z,1-9,-]+)'=>'admin/editpages/$1',
    'admin/pages/delete/([a-z,A-Z,1-9,-]+)'=>'admin/deletepages/$1',
);