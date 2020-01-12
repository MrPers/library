<?php


class Book
{
	public static function getBookItemByID($ID)	{
		$ID = intval($ID);

		if ($ID) {
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM book WHERE ID=' . $ID);

			$result->setFetchMode(PDO::FETCH_ASSOC);

			$bookItem = $result->fetch();

			return $bookItem;
		}

    }

    public static function getBooksListCategory($categoryId)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        $result = $db->query('SELECT book.ID , book.name FROM book, genre WHERE book.ID_genre = genre.ID and genre.ID =' . $categoryId);
		$bookList = array();

		$i = 0;
		while($row = $result->fetch()) {
			$bookList[$i]['ID'] = $row['ID'];
			$bookList[$i]['name'] = $row['name'];
			$i++;
		}

		return $bookList;
    }

    public static function getBookById($ID)
    {
        // Соединение с БД
        $db = Db::getConnection();
        
        $result = $db->query('SELECT * FROM book, author, genre WHERE book.ID_autor = author.ID and book.ID_genre = genre.ID and book.ID=' . $ID);

        return $result->fetch();
    }

	public static function getLatestBooks()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Используется подготовленный запрос
        $result = $db->prepare('SELECT ID, name FROM book ORDER BY ID DESC');
        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $booksList = array();
        while ($row = $result->fetch()) {
            $booksList[$i]['ID'] = $row['ID'];
            $booksList[$i]['name'] = $row['name'];
            $i++;
        }

        return $booksList;
    }

    public static function getImage($ID)
    {
        //изображения-пустышка
        $noImage = 'no-image.jpg';

        $path = '/assets/images/';

        $pathToBookImage = $path . 'b'. $ID . '.jpg';


        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToBookImage)) {
            return $pathToBookImage;
        }
        else{
            return $path . $noImage;
        }
    }
    
    public static function getStars($ID)
    {
        // Соединение с БД
        $db = Db::getConnection();

        $res = $db->query("SELECT points, votes FROM book WHERE id=".$ID);
        
        $stars = $res->fetch();
        
        return $stars;
    }

	public static function getBookList() {
		$db = Db::getConnection();
		$bookList = array();

		$result = $db->query('SELECT * FROM book');

		$i = 0;
		while($row = $result->fetch()) {
			$bookList[$i]['ID'] = $row['ID'];
			$bookList[$i]['name'] = $row['name'];
			$bookList[$i]['date'] = $row['date'];
			$i++;
		}

		return $bookList;
    }
    
    //Добавляет новую книгу
    public static function createBook($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "INSERT INTO book VALUES ( null, ".$options['ID_autor'].", ".$options['ID_genre'].", '".$options['name']."', '".$options['content']."', null, 0, 0)";

        $result = $db->prepare($sql);

        if ($result->execute()) {
            // возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        return 0;
    }

    //удалить
    public static function deleteBookById($id)
    {
        $db= DB::getConnection();

        $result = $db->prepare("DELETE FROM book WHERE id ={$id}");
        
        return $result->execute();
    }

    // Редактирует с заданным id
    public static function updateBookById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE book
            SET 
                name = '".$options['name']."', 
                ID_autor = ".$options['ID_autor'].", 
                ID_genre = ".$options['ID_genre'].", 
                content = '".$options['content']."'
            WHERE id = {$id}";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        return $result->execute();
    }
}