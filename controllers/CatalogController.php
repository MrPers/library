<?php

class CatalogController
{
    public function actionCategory($categoryId)
    {
        $categories = Category::getCategoriesList();
        $categoryBooks = Book::getBooksListCategory($categoryId);

        // Подключаем вид
        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }

    public function actionScan( )
    {
		// Список категорий для левого меню
        $categories = Category::getCategoriesList();

        $quest = Category::getListBooks();

        // Подключаем вид
        require_once(ROOT . '/views/catalog/scan.php');
        return true;
    }
}
