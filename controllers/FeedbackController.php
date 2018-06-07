<?php

class FeedbackController //extends FrontController
{
    public function actionIndex() {
        $pages = new Pages();
        $getpage = $pages->getPage('zvorotniy-zvyazok');
        $page = $getpage[0];
        $name = "";
        $e_mail = "";
        $subject = "";
        $text = "";
        $to = "program.malik@gmail.com";
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $result = "";
        $data = "";

        $errors = '';
        if(isset($_POST["submit"])) {
            $name = trim($_POST["name"]);
            $e_mail = trim($_POST["e_mail"]);
            $subject = trim($_POST["subject"]);
            $text = trim($_POST["text"]);
            if (!User::checkEmail($e_mail)) {
                $errors[] = "Невірно введений E-Mail";
            } else if (!User::checkText($name)) {
                $errors[] = "Коротке ім'я";
            } else if (!User::checkText($subject)) {
                $errors[] = "Коротка тема повідомлення";
            } else if (!User::checkText($text)) {
                $errors[] = "Коротке повідомлення";
            }
            $text .= "<hr><p>Надіслано від: ".$name." <".$e_mail."></p>";
            $text .= "<p>Дата: ".date("d.m.Y")."</p>";
            $text .= "<p>Час: ".date("H:i:s")."</p>";
            if($errors == false) {
                $result = mail($to, $subject, $text, $headers);
            }
        }
        $data = array("result"=>$result, "errors"=>$errors, "page"=>$page);
        $template = new Template();
        $template->render('feedback/index', array("data"=>$data));
        return true;
    }
}