<?php

class Admin_userController extends AdminBase
{
    //Главная строаница
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        $categoriesList = User::getCategoriesListAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/index.php');
        return true;
    }

    //Редактировать человеков
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о человекe
        $user = User::getUserById($id);

        //Обработка формы
        if (isset($_POST['submit'])) {
            // Сохраняем изменения
            User::updateUserById($id, $_POST['name'], $_POST['email'], $_POST['password'], $_POST['role']);

            // Перенаправляем пользователя на страницу управлениями категориями
            header("Location: /admin/user");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/update.php');
        return true;
    }

    //Удалить человека
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о человекe
        $user = User::getUserById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            User::deleteUserById($id);
            header("Location: /admin/user");
            return true;
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/delete.php');
        return true;
    }

}
