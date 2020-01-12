<?php

class IndexController
 {
	
	public function actionIndex()	{

		// require_once('models/Category.php');
		// require_once('controllers/BookController.php');
		
		// Список категорий для левого меню
        $categories = Category::getCategoriesList();

		// Список книг
		$latestBooks = Book::getLatestBooks(6);
				
		require_once(ROOT . '/views/index/index.php');
		return true;
	}
}
