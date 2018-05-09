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

    public function action404() {

        $template = new Template();
        $template->render('site/404');
        return true;

    }

    public function actionNotrights() {

        $template = new Template();
        $template->render('site/notrights');
        return true;

    }
}