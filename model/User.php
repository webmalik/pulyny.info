<?php

class User extends FrontModel {

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
        $user = self::getItem("users", array("id", "login"), "login=\"".$login."\"");
        if(isset($user[0]['login'])) {
            return true;
        }

        return false;
    }
    
    public static function checkBlock($login) {
        $user = self::getItem("users", array("id", "login", "block"), "login=\"".$login."\"&&block=1");
        if(isset($user[0]['block'])) {
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
        $user = self::getItem("users", array("id", "login", "password"), "login=\"".$login."\" and password=\"".$password."\"");
        if ($user) {
            return $user[0]['id'];
        }
        return false;
    }

    public static function checkAdminData($login, $password, $pin)
    {
        $key = self::cryptAdminKey($password, $pin);
        $user = self::getItem("users", array("id", "login", "password", "is_admin"), "login=\"".$login."\" and password=\"".$password."\" and is_admin=\"".$key."\"");
        if ($user) {
            return $user[0]['is_admin'];
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

    public static function cryptPass($password) {
        $paramsPath = ROOT . "/config/config.php";
        $params = include($paramsPath);

        for ($i = 0; $i < 5; $i++) {
            $password = md5($password.$params['secret_key'].$i);
        }

        return $password;
    }

    public static function cryptAdminKey($password, $pin) {
        $paramsPath = ROOT . "/config/config.php";
        $params = include($paramsPath);
        $pass = self::cryptPass($password);
        $key = $params['secret_key'];

        $crypt = md5($pass.$pin.$key);
        $cert = md5($pin.$key);
        $result = md5($crypt.$cert);

        return $result;
    }

    public static function auth($userId)
    {
        $info = self::getUserById($userId);
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_login'] = $info[0]['login'];
        $_SESSION['user_fname'] = $info[0]['first_name'];
        $_SESSION['user_lname'] = $info[0]['last_name'];
        $_SESSION['user_image'] = $info[0]['image'];

    }

    public static function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_login']);
        unset($_SESSION['user_fname']);
        unset($_SESSION['user_lname']);
        unset($_SESSION['user_image']);
        unset($_SESSION['user_admin']);
    }

    public static function getUserById($id)
    {
        return self::getItem("users", array('id','login','password', 'image', 'first_name', 'last_name', 'e_mail', 'is_admin', 'block'), 'id='.$id);
    }

    public static function checkLoggedAdmin()
    {
        if (isset($_SESSION['user_id'])) {
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

}