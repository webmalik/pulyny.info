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
        $add_news = "";
        $title = "";
        $name = "";
        $description = "";
        $text = "";
        $image = "";
        $meta_description = "";
        $meta_keywords = "";

        $errors = '';

        if(isset($_POST["submit"])) {
            $uploaddir = ROOT.'\uploads\articles\\';
            $uploadfile = $uploaddir . basename($_FILES['image']['name']);
            if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
            }
            $title = trim($_POST["title"]);
            $name = trim($_POST["name"]);
            $description = trim($_POST["description"]);
            $text = trim($_POST["text"]);
            $image = trim("\uploads\articles\\".basename($_FILES['image']['name']));
            $meta_description = trim($_POST["meta_description"]);
            $meta_keywords = trim($_POST["meta_keywords"]);

            if($errors == false) {
                $add_news = $article->addArticle(array("title"=>$title, "name"=>$name, "description"=>$description, "text"=>$text, "image"=>$image, "meta_description"=>$meta_description, "meta_keywords"=>$meta_keywords));
            }
        }
        $template = new Template();
        $template->adminrender('admin/news/add', array("result"=>$add_news));
        return true;
    }

    public function actionEditnews($slug) {
        $article = new Articles();
        $art=$article->getArticle($slug);

        $title = "";
        $description = "";

        $text = "";
        $name = "";
        $image = "";
        $meta_description = "";
        $meta_keywords = "";

        $errors = '';

        if(isset($_POST["submit"])) {
            $uploaddir = ROOT.'\uploads\articles\\';
            $uploadfile = $uploaddir . basename($_FILES['image']['name']);
            if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
            }
            $title = trim($_POST["title"]);
            $name = trim($_POST["name"]);
            $description = trim($_POST["description"]);
            $text = trim($_POST["text"]);
            $image = trim("\uploads\articles\\".basename($_FILES['image']['name']));
            $meta_description = trim($_POST["meta_description"]);
            $meta_keywords = trim($_POST["meta_keywords"]);
            print_r($_POST);
            if($errors == false) {
                $add_news = $article->editArticle(array("title"=>$title, "name"=>$name, "description"=>$description, "text"=>$text, "image"=>$image, "meta_description"=>$meta_description, "meta_keywords"=>$meta_keywords), "name=\"".$slug."\"");
            }
        }
        $template = new Template();
        $template->adminrender('admin/news/edit', array("article"=>$art));
        return true;
    }

    public function actionDeletenews($slug) {
        $delete_news = "";
        $article = new Articles();
        $news = $article->getArticle($slug);

        $errors = '';

        if(isset($_POST["submit"])) {

            if($errors == false) {
                $delete_news = $article->deleteArticle($news[0]["id"]);
            }
        }
        $template = new Template();
        $template->adminrender('admin/news/delete', array("result"=>$delete_news));
        return true;
    }
}