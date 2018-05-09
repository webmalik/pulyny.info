<?php

class UserController
{
    public function actionAuth() {
        $user = new User();
        $errors = '';
        $result = "";
        if(isset($_POST['submit'])) {
            $login = trim($_POST["login"]);
            $password = trim($_POST["password"]);
            $password = $user->cryptPass($password);
            if(!$user->checkLogin($login)) {
                $errors[] = "Логін повинен містити лише латинські літери та цифри";
            }else if(!$user->checkLoginExists($login)) {
                $errors[] = "Даний Логін не зареєстрований";
            } else if ($user->checkBlock($login)) {
                $errors[] = "Даний користувач заблокований";
            } else {
                $result = $user->checkUserData($login, $password);
                if($result === false) {
                    $errors[] = "Неправильно введений пароль";
                }
            }
            //echo $result;
            if($errors == false) {
                $user->auth($result);
            }
        }
        $data = array("result"=>$result, "errors"=>$errors);
        $template = new Template();
        $template->render('user/auth', array("data"=>$data));
        return true;
    }

    public function actionLogout() {
        $user = new User();
        $user->logout();
        header("Location: /");
    }
}