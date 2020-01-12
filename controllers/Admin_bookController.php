<?php

class Admin_bookController extends AdminBase
{
    //Главная строаница
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список книгаов
        $booksList = Book::getBookList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_book/index.php');
        return true;
    }

    //Добавить книга
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        $categoriesList = Category::getCategoriesList();

        $autorsList = Category::getAutorsList();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['ID_autor'] = $_POST['ID_autor'];
            $options['ID_genre'] = $_POST['ID_genre'];
            $options['content'] = $_POST['content'];

            // Добавляем новый книга
            $id = Book::createBook($options);

            // Если запись добавлена и есть изоброжение
            if (($id) && (is_uploaded_file($_FILES["image"]["tmp_name"]))) {
                // Если загружалось, переместим его в нужную папке, дадим новое имя
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/assets/images/b{$id}.jpg");
            }
        }
        require_once(ROOT . '/views/admin_book/create.php');
        return true;
    }

    // Редактировать книгу
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        $book=Book::getBookItemByID($id);

        $categoriesList = Category::getCategoriesList();

        $autorsList = Category::getAutorsList();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['ID_autor'] = $_POST['ID_autor'];
            $options['ID_genre'] = $_POST['ID_genre'];
            $options['content'] = $_POST['content'];

            // Сохраняем изменения
            if ((Book::updateBookById($id, $options)) && (is_uploaded_file($_FILES["image"]["tmp_name"]))) {
                // Если загружалось, переместим его в нужную папке, дадим новое имя
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/books/{$id}.jpg");
            }
            header("Location: /admin/book");
            return true;
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_book/update.php');
        return true;
    }

    // Удалить книгу
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        $book=Book::getBookItemByID($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            Book::deleteBookById($id);
            header("Location: /admin/book");
            return true;

        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_book/delete.php');
        return true;
    }
}
