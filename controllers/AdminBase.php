<?php

abstract class AdminBase
{

    //  является ли администратором человек
    public static function checkAdmin()
    {
        // авторизирован ли пользователь
        $userId = User::checkLogged();

        // Получаем информацию о текущем пользователе
        $user = User::getUserById($userId);

        if ($user['role'] == 'admin')
            return true;
        return false;
    }

}
