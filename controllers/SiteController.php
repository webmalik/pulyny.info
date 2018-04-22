<?php

class SiteController //extends FrontController
{
    public function actionIndex() {

        $articles = new Articles();
        $news = $articles->getAllDescArticles();
        $template = new Template();
        $template->render('site/index', array("news" => $news));
        return true;

    }
}