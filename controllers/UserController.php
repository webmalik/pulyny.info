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
            $pin = trim($_POST['pin']);

            if(!$user->checkLogin($login)) {
                $errors[] = "Логін повинен містити лише латинські літери та цифри";
            } else if(!$user->checkLoginExists($login)) {
                $errors[] = "Даний Логін не зареєстрований";
            } else if ($user->checkBlock($login)) {
                $errors[] = "Даний користувач заблокований";
            } else if(isset($_POST['is_admin']) && $user->checkAdminData($login, $password, $pin) == NULL) {
                $errors[] = "Pin-код адмністратора не вірний";
            } else {
                $result = $user->checkUserData($login, $password);
                if($result === false) {
                    $errors[] = "Неправильно введений пароль";
                }
            }
            if($errors == false) {
                $user->auth($result);
            }
            if(isset($_POST['is_admin']) && $user->checkAdminData($login, $password, $pin) != NULL) {
                $_SESSION['user_admin'] = $user->checkAdminData($login, $password, $pin);
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

    public function actionRegistration() {
        $user = new User();
        $errors = '';
        $result = "";
        $image = "/uploads/users/user.jpg";
        $pin = "";
        if(isset($_POST['submit'])) {
            $login = trim($_POST["login"]);
            $password = trim($_POST["password"]);
            if(isset($_POST['is_admin'])) {
                $pin = trim($_POST['pin']);
            }
            $first_name = trim($_POST["first_name"]);
            $last_name = trim($_POST["last_name"]);
            $e_mail = trim($_POST["e_mail"]);
            if(!$user->checkLogin($login)) {
                $errors[] = "Логін повинен містити лише латинські літери та цифри";
            } else if($user->checkLoginExists($login)) {
                $errors[] = "Даний Логін уже зареєстрований";
            } else if(!$user->checkPassword($password)) {
                $errors[] = "Пароль не може бути менше 6 символів";
            } else {
                $password = $user->cryptPass($password);
                if(isset($_POST['is_admin'])) {
                    $pin = $user->cryptAdminKey($password, $pin);
                }
            } if (!$user->checkEmail($e_mail)) {
                $errors[] = "Невірно введений E-Mail";
            }else if ($user->checkEmailExists($e_mail)) {
                $errors[] = "Даний E-Mail уже зареєстрований";
            }else if (!$user->checkText($first_name)) {
                $errors[] = "Коротке ім'я";
            }else if (!$user->checkText($last_name)) {
                $errors[] = "Коротке прізвище";
            }
            if($errors == false) {
                $result = $user->registration(array("login"=>$login, "password"=>$password, "image"=>$image, "first_name"=>$first_name, "last_name"=>$last_name, "e_mail"=>$e_mail, "is_admin"=>$pin));
            }
        }
        $data = array("result"=>$result, "errors"=>$errors);
        $template = new Template();
        $template->render('user/registration', array("data"=>$data));
        return true;
    }

    public function actionProfile($login) {
        $user = new User();

        if(isset($_SESSION['user_login'])) {
            $id = $_SESSION['user_id'];
            $login = $_SESSION['user_login'];
            $image = $_SESSION['user_image'];
            $fname = $_SESSION['user_fname'];
            $lname = $_SESSION['user_lname'];
            $email = $_SESSION['user_email'];
            $block = 0;
        }else {
            $user_info = $user->getUserByLogin($login);
            $id = $user_info[0]['id'];
            $login = $user_info[0]['login'];
            $image = $user_info[0]['image'];
            $fname = $user_info[0]['first_name'];
            $lname = $user_info[0]['last_name'];
            $email = $user_info[0]['e_mail'];
            $block = $user_info[0]['block'];
        }

        $data = array("id"=>$id, "login"=>$login, "image"=>$image, "fname"=>$fname, "lname"=>$lname, "email"=>$email, "block"=>$block);

        $template = new Template();
        $template->render('user/profile', array("data"=>$data));

    }

    public function actionProfile_edit($login) {
        $user = new User();
        $errors = '';
        $result = "";
        $user_info = $user->getUserByLogin($login);
        if(isset($_POST['submit'])) {
            $first_name = trim($_POST["first_name"]);
            $last_name = trim($_POST["last_name"]);
            $e_mail = trim($_POST["e_mail"]);
            if (!$user->checkEmail($e_mail)) {
                $errors[] = "Невірно введений E-Mail";
            }else if($e_mail != $user_info[0]['e_mail'] && $user->checkEmailExists($e_mail)) {
                $errors[] = "Даний E-Mail уже зареєстрований";
            }else if (!$user->checkText($first_name)) {
                $errors[] = "Коротке ім'я";
            }else if (!$user->checkText($last_name)) {
                $errors[] = "Коротке прізвище";
            }
            if($_FILES['image']['size'] > 0) {
                $uploaddir = ROOT.'\uploads\users\\'.$login."_";
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                }
                $image = trim("\uploads\users\\".$login."_".basename($_FILES['image']['name']));
            } else {
                $image = trim($_POST["edit_img"]);
            }
            if($errors == false) {
                $result = $user->edit(array("image"=>$image, "first_name"=>$first_name, "last_name"=>$last_name, "e_mail"=>$e_mail),"login=\"".$login."\"");
                $_SESSION['user_image'] = $image;
                $_SESSION['user_fname'] = $first_name;
                $_SESSION['user_lname'] = $last_name;
                $_SESSION['user_email'] = $e_mail;
            }
        }
        $data = array("result"=>$result, "errors"=>$errors, "user"=>$user_info[0]);
        $template = new Template();
        $template->render('user/edit', array("data"=>$data));
        return true;
    }
}