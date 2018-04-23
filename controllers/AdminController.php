<?php

class AdminController //extends FrontController
{
    public function actionIndex() {
        $title = "";
        $description = "";
        /*if(isset($_POST["submit"])) {
            $title = trim($_POST["title"]);
            $description = trim($_POST["description"]);
        }*/
        $article = new Articles();
        $template = new Template();
        $template->adminrender('admin/index');
        return true;
    }

    public function actionNews() {
        $article = new Articles();
        $news = $article->getAllDescArticles();
        $template = new Template();
        $template->adminrender('admin/news', array("news"=>$news));
        return true;
    }
}