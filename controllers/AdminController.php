<?php

class AdminController //extends FrontController
{
    public function actionIndex() {
        $article = new Articles();
        $template = new Template();
        $template->adminrender('admin/index');
        return true;
    }

    public function actionNews() {
        $article = new Articles();
        $news = $article->getAllDescArticles();
        $template = new Template();
        $template->adminrender('admin/news/index', array("news"=>$news));
        return true;
    }

    public function actionAddNews() {
        $article = new Articles();

        $title = "";
        $description = "";
        $text = "";
        $image = "";
        $meta_description = "";
        $meta_keywords = "";

        $errors = '';

        if(isset($_POST["submit"])) {
            $title = trim($_POST["title"]);
            $description = trim($_POST["description"]);
            $text = trim($_POST["text"]);
            $image = trim($_POST["image"]);
            $meta_description = trim($_POST["meta_description"]);
            $meta_keywords = trim($_POST["meta_keywords"]);

            if($errors == false) {
                $add_news = $article->addArticle(array("title"=>$title, "description"=>$description, "text"=>$text, "image"=>$image, "meta_description"=>$meta_description, "meta_keywords"=>$meta_keywords));
            }
        }
        $template = new Template();
        $template->adminrender('admin/news/add');
        return true;
    }
}