<?php

class NewsController //extends FrontController
{
    public function actionIndex() {

        $articles = new Articles();
        $news = $articles->getAllDescArticles();
        $template = new Template();
        $template->render('news/index', array("news" => $news));
        return true;

    }

    public function actionView($name) {

        $articles = new Articles();
        $article = $articles->getArticle($name);
        $template = new Template();
        $template->render('news/view', array("article" => $article));
        return true;

    }
}