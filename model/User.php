<?php

class User
{

    public static function checkText($text) {
        if(strlen($text) > 3) {
            return true;
        }
        return false;
    }

    public static function checkPassword($password) {
        if(strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    public static function checkEmail($email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkLogin($login) {
        if(preg_match("/[A-Z,a-z,0-9]+/",$login)) {
            return true;
        }
        return false;
    }

    public static function checkLoginExists($login) {
        $db = DataBase::getConnection();

        $sql = 'SELECT COUNT(*) FROM users WHERE login = :login';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn()) {
            return true;
        }

        return false;
    }
    
    public static function checkBlock($login) {
        $db = DataBase::getConnection();

        $sql = 'SELECT COUNT(*) FROM Users WHERE login = :login && block = 1';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn()) {
            return true;
        }

        return false;
    }

    public static function checkEmailExists($email) {
        $db = DataBase::getConnection();

        $sql = 'SELECT COUNT(*) FROM users WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn()) {
            return true;
        }

        return false;
    }

    public static function checkUserData($login, $password)
    {
        $db = DataBase::getConnection();

        $sql = 'SELECT * FROM users WHERE login = :login AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();

        if ($user) {
            return $user['id'];
        }
        return false;
    }

    public static function register($first_name, $middle_name, $last_name, $viddil, $email, $login, $password) {
        $db = DataBase::getConnection();

        $sql = 'INSERT INTO `users`( `first_name`, `middle_name`, `last_name`, `viddil`, `email`, `login`, `password`) VALUES (:first_name, :middle_name, :last_name, :viddil, :email, :login, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $result->bindParam(':middle_name', $middle_name, PDO::PARAM_STR);
        $result->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $result->bindParam(':viddil', $viddil, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

    public function cryptPass($password) {
        $paramsPath = ROOT . "/config/config.php";
        $params = include($paramsPath);

        for ($i = 0; $i < 5; $i++) {
            $password = md5($password.$params['secret_key'].$i);
        }

        return $password;
    }

    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function getUserById($id)
    {
        $db = DataBase::getConnection();

        $sql = 'SELECT * FROM users WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function getUserNameById($id)
    {
        $db = DataBase::getConnection();

        $sql = 'SELECT first_name, middle_name, last_name FROM users WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $name = $result->fetch();
        return $name["last_name"] . " " . mb_substr($name['first_name'],0,1,'UTF-8') . ". " . mb_substr($name['middle_name'],0,1,'UTF-8').'.';
    }

    public static function getUserByLogin($login)
    {
        $db = DataBase::getConnection();

        $sql = 'SELECT * FROM users WHERE login = :login';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function checkLogged()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /auth");
    }

    public static function checkLoggedAdmin()
    {
        if (isset($_SESSION['user'])) {
            $user = self::getUserById($_SESSION['user']);
            if($user['admin'] == 1) {
                return true;
            }else {
                return false;
            }
        }
    }

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public static function getUserList()
    {
        // Соединение с БД
        $db = DataBase::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT * FROM users WHERE block != 1');

        // Получение и возврат результатов
        $i = 0;
        $list = array();
        while ($row = $result->fetch()) {
            $list[$i]['id'] = $row['id'];
            $list[$i]['login'] = $row['login'];
            $list[$i]['first_name'] = $row['first_name'];
            $list[$i]['middle_name'] = $row['middle_name'];
            $list[$i]['last_name'] = $row['last_name'];
            $list[$i]['photo'] = $row['photo'];
            $list[$i]['viddil'] = $row['viddil'];
            $list[$i]['birdth'] = $row['birdth'];
            $i++;
        }
        return $list;
    }

}