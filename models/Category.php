<?php

// Управление категориями (автор, жанр и тд..)
class Category
{

    public static function getCategoriesList()
    {
        $db = Db::getConnection();
        
        $result = $db->query('SELECT id, gname FROM genre');

        $i = 0;
        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['gname'];
            $i++;
        }
        return $categoryList;
    }

    public static function getAutorsList()
    {
        $db = Db::getConnection();
        
        $result = $db->query('SELECT ID, Full_name FROM author');
        $i = 0;
        $autorList = array();
        while ($row = $result->fetch()) {
            $autorList[$i]['ID'] = $row['ID'];
            $autorList[$i]['Full_name'] = $row['Full_name'];
            $i++;
        }
        return $autorList;
    }

    public static function getListBooks()
    {
        $anse = $_POST['words'];

        $anse=htmlspecialchars($anse);
        
        if($anse==="") return false;

        $db = Db::getConnection();
        
        $result = $db->query('SELECT DISTINCT (name), book.ID FROM book, author WHERE book.ID_autor = author.ID and author.Full_name like "%'. $anse. '%" OR book.name LIKE "%'. $anse. '%"');

       return $result;
    }
    
    public static function insertstarBooks($book, $rating)
    {
		$db = Db::getConnection();

        $id = $book["0"];
		$votes = $book["votes"] + 1;
		$points = (($book["points"] * $book["votes"]) + $rating) / $votes;

        // Текст запроса к БД
        $sql = "UPDATE book SET points = {$points}, votes = {$votes} WHERE ID = {$id}";

        $result = $db->prepare($sql);
        return $result->execute();
		
    }
    
}
