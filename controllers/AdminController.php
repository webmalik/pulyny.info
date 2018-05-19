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
            $title = trim($_POST["title"]);
            $name = trim($_POST["name"]);
            $description = trim($_POST["description"]);
            $text = trim($_POST["text"]);
            $meta_description = trim($_POST["meta_description"]);
            $meta_keywords = trim($_POST["meta_keywords"]);

            if($_FILES['image']['size'] > 0) {
                $uploaddir = ROOT.'\uploads\articles\\'.$name."_";
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                }
                $image = trim("\uploads\articles\\".$name."_".basename($_FILES['image']['name']));
            } else {
                $image = trim($_POST["edit_img"]);
            }

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

        $edit_news ="";
        $title = "";
        $description = "";
        $text = "";
        $name = "";
        $image = "";
        $meta_description = "";
        $meta_keywords = "";

        $errors = '';

        if(isset($_POST["submit"])) {

            $title = trim($_POST["title"]);
            $name = trim($_POST["name"]);
            $description = trim($_POST["description"]);
            $text = trim($_POST["text"]);
            $meta_description = trim($_POST["meta_description"]);
            $meta_keywords = trim($_POST["meta_keywords"]);

            if($_FILES['image']['size'] > 0) {
                $uploaddir = ROOT.'\uploads\articles\\'.$name."_";
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                }
                $image = trim("\uploads\articles\\".$name."_".basename($_FILES['image']['name']));
            } else {
                $image = trim($_POST["edit_img"]);
            }

            if($errors == false) {
                $edit_news = $article->editArticle(array("title"=>$title, "name"=>$name, "description"=>$description, "text"=>$text, "image"=>$image, "meta_description"=>$meta_description, "meta_keywords"=>$meta_keywords), "name=\"".$slug."\"");
            }
        }
        $template = new Template();
        $template->adminrender('admin/news/edit', array("article"=>$art, "result"=>$edit_news));
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

    public function actionUsers() {
        $data ="";
        $user = new User();
        $user_info = $user->getUsersList();
        $template = new Template();
        $data = array("users_info"=>$user_info);
        $template->adminrender('admin/users/index', array("data"=>$data));
        return true;
    }

    public function actionUsers_unblock($login) {
        $user = new User();
        $user->unblock($login);
        //$user_info = $user->getUsersList();
        $template = new Template();
        header("Location: /admin/users/");
        return true;
    }

    public function actionUsers_block($login) {
        $user = new User();
        $user->block($login);
        //$user_info = $user->getUsersList();
        $template = new Template();
        header("Location: /admin/users/");
        return true;
    }

    public function actionAdvertisement() {
        $advertisement = new Advertisement();
        $advertisements = $advertisement->getAllDescAdvertisement();
        $template = new Template();
        $template->adminrender('admin/advertisement/index', array("advertisements" => $advertisements));
        return true;
    }

    /*public function actionAddNews() {
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
            $title = trim($_POST["title"]);
            $name = trim($_POST["name"]);
            $description = trim($_POST["description"]);
            $text = trim($_POST["text"]);
            $meta_description = trim($_POST["meta_description"]);
            $meta_keywords = trim($_POST["meta_keywords"]);

            if($_FILES['image']['size'] > 0) {
                $uploaddir = ROOT.'\uploads\articles\\'.$name."_";
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                }
                $image = trim("\uploads\articles\\".$name."_".basename($_FILES['image']['name']));
            } else {
                $image = trim($_POST["edit_img"]);
            }

            if($errors == false) {
                $add_news = $article->addArticle(array("title"=>$title, "name"=>$name, "description"=>$description, "text"=>$text, "image"=>$image, "meta_description"=>$meta_description, "meta_keywords"=>$meta_keywords));
            }
        }
        $template = new Template();
        $template->adminrender('admin/news/add', array("result"=>$add_news));
        return true;
    }*/

    public function actionEditadvertisement($name) {
        $advertisement = new Advertisement();
        $advert=$advertisement->getAdvertisement($name);

        $edit_advertisement ="";
        $title = "";
        $description = "";
        $text = "";
        $slug = "";
        $image = "";

        $errors = '';

        if(isset($_POST["submit"])) {

            $title = trim($_POST["title"]);
            $slug = trim($_POST["slug"]);
            $description = trim($_POST["description"]);
            $text = trim($_POST["text"]);

            if($_FILES['image']['size'] > 0) {
                $uploaddir = ROOT.'\uploads\advertisement\\'.$name."_";
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                }
                $image = trim("\uploads\advertisement\\".$name."_".basename($_FILES['image']['name']));
            } else {
                $image = trim($_POST["edit_img"]);
            }

            if($errors == false) {
                $edit_advertisement = $advertisement->editAdvertisement(array("title"=>$title, "slug"=>$slug, "description"=>$description, "text"=>$text, "image"=>$image), "slug=\"".$name."\"");
            }
        }
        $template = new Template();
        $template->adminrender('admin/advertisement/edit', array("advertisement"=>$advert, "result"=>$edit_advertisement));
        return true;
    }

    public function actionDeleteadvertisement($slug) {
        $delete_advertisement = "";
        $advertisement = new Advertisement();
        $advert=$advertisement->getAdvertisement($slug);

        $errors = '';

        if(isset($_POST["submit"])) {

            if($errors == false) {
                $delete_advertisement = $advertisement->deleteAdvertisement($advert[0]["id"]);
            }
        }
        $template = new Template();
        $template->adminrender('admin/advertisement/delete', array("result"=>$delete_advertisement));
        return true;
    }
}