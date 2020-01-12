<?php
return array(

    // Книга:
    'book/([0-9]+)' => 'book/view/$1', 
    'book/insert' => 'book/insert',
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',  
    'category/([0-9]+)' => 'catalog/category/$1',
    'scan' => 'catalog/scan',
    // Пользователь: Админпанель:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'admin/book/create' => 'admin_book/create',
    'admin/book/update/([0-9]+)' => 'admin_book/update/$1',
    'admin/book/delete/([0-9]+)' => 'admin_book/delete/$1',
    'admin/book' => 'admin_book/index', 
    'admin/user/update/([0-9]+)' => 'admin_user/update/$1',
    'admin/user/delete/([0-9]+)' => 'admin_user/delete/$1',
    'admin/user' => 'admin_user/index',
    'admin' => 'admin/index',
    // Главная страница
    'index.php' => 'index/index',
    '' => 'index/index',

);
