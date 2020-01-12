<?php

class BookController
{
	public function actionView($id)	{
		if ($id) {
			
        $categories = Category::getCategoriesList();

		$book = Book::getBookById($id);

		// Звезды
		$rating = Book::getStars($id);

		if(!$book)
			require_once(ROOT . '/views/404/404.php');
		else
			require_once(ROOT . '/views/book/view.php');
		return true;

		}
	}

	public function actionInsert()
	{
        // авторизирован ли пользователь
		if(User::checkLogged()){
		
			$obj = $_POST["stars"];
			$id = $_POST["obj_id"];

			$book = Book::getBookById($id);

			Category::insertstarBooks($book, $obj);
		
		}
		else

		return true;
	}
}