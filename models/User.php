<?php

class User
{
    // Запоминаем пользователя
    public static function auth($userId)
    {
       // Записываем идентификатор пользователя в сессию
       $_SESSION['user'] = $userId;
    }

    // Регистрация пользователя 
    public static function register($name, $email, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO user VALUES (null,  "'. $name .'", "'. $email. '", "'. $password. '", "")';

        return $db->exec($sql);
    }

    //  Проверяем существует ли пользователь
    public static function checkUserData($email, $password)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE email = "' . $email.'" AND password = "'.$password.'"';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->execute();

        // Обращаемся к записи
        $user = $result->fetch();

        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return $user['ID'];
        }
        return false;
    }

    // Проверяет является ли пользователь гостем
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    //Проверяет имя: не меньше, чем 2 символа
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    // Проверяет Пароль
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    //Проверяет email
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    // занят email другим пользователем
    public static function checkEmailExists($email)
    {
        $db = Db::getConnection();

        $result = $db->prepare('SELECT COUNT(*) FROM user WHERE email ="'. $email .'"' );
        $result->execute();
        $count = $result->fetchColumn();
        print_r($count);
        if ($count)
            return true;
        return false;
    }

    //Возвращает идентификатор пользователя
    public static function checkLogged()
    {
        if (isset($_SESSION['user'])) 
            return $_SESSION['user'];
        else
            return false;

        header("Location: /user/login");
    }
    
    //Возвращает пользователя с указанным id
    public static function getUserById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = "'.$id.'"';
        $result = $db->prepare($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }
    
    // Возвращает массив категорий для списка в админпанели 
    public static function getCategoriesListAdmin()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT * FROM user');

        // Получение и возврат результатов
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['ID'] = $row['ID'];
            $categoryList[$i]['email'] = $row['email'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['password'] = $row['password'];
            $categoryList[$i]['role'] = $row['role'];
            $i++;
        }
        return $categoryList;
    }
    
    //удалить
    public static function deleteUserById($id)
    {
        $db= DB::getConnection();

        $result = $db->prepare("DELETE FROM user WHERE id ={$id}");
        
        return $result->execute();
    }

    
    // Редактирует товар с заданным id
    public static function updateUserById($id, $name, $email, $password, $role)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE user
            SET 
                name = '{$name}', 
                email = '{$email}', 
                password = '{$password}', 
                role = '{$role}'
            WHERE id = {$id}";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        return $result->execute();
    }
}