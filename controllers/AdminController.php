<?php

class AdminController //extends FrontController
{
    public function actionIndex() {
        $title = "Adasda";
        $description = "Asdasdas";
        if(isset($_POST["submit"])) {
            $title = trim($_POST["title"]);
            $description = trim($_POST["description"]);
        }
        $article = new Articles();
        $result = $article->addArticle(array("title"=>$title, "description"=>$description));
        $template = new Template();
        $template->adminrender('admin/index', array("title"=>"Admin", "result" => $result));
        return true;
    }
}