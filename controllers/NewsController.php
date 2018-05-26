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

        $data = "";
        $articles = new Articles();
        $article = $articles->getArticle($name);
        $comments = $articles->getCommentsArticle($article[0]['id']);
        $data = array("article" => $article, "comments" => $comments);
        $template = new Template();
        $template->render('news/view', $data);
        return true;

    }
}