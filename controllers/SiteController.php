<?php

class SiteController //extends FrontController
{
    public function actionIndex() {
        $pages = new Pages();
        $getpage = $pages->getPage('holovna');
        $page = $getpage[0];
        $articles = new Articles();
        $news = $articles->getAllDescArticles();
        $data = array("news" => $news, "page"=>$page);
        $template = new Template();
        $template->render('site/index', array("data" => $data));
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