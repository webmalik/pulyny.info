<?php

class NewsController //extends FrontController
{
    public function actionIndex() {
        $pages = new Pages();
        $getpage = $pages->getPage('novyny');
        $page = $getpage[0];
        $articles = new Articles();
        $news = $articles->getAllDescArticles();
        $data = array("news" => $news, "page"=>$page);
        $template = new Template();
        $template->render('news/index', array("data" => $data));
        return true;
    }

    public function actionView($name) {
        $pages = new Pages();
        $page = "";
        $data = "";
        $articles = new Articles();
        $article = $articles->getArticle($name);
        $comments = $articles->getCommentsArticle($article[0]['id']);
        $page = array("title"=>$article[0]['title'], "meta_keywords"=>$article[0]['meta_keywords'], "meta_description"=>$article[0]['meta_description']);
        $data = array("article" => $article, "comments" => $comments, "page"=>$page);
        $template = new Template();
        $template->render('news/view', array("data"=>$data));
        return true;

    }
}