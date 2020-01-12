<?php

// Главная страница в админпанели
class AdminController extends AdminBase
{
    public function actionIndex()
    {
        // Проверка доступа
        if(!self::checkAdmin())
            // Иначе завершаем работу с сообщением об закрытом доступе
            die('Access denied');

        // Подключаем вид
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

}
