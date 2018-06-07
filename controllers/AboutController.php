<?php

class AboutController //extends FrontController
{
    public function actionIndex() {
        $pages = new Pages();
        $getpage = $pages->getPage('pro-pulyny');
        $page = $getpage[0];
        $data = array("page"=>$page);
        $template = new Template();
        $template->render('about/index', array("data"=>$data));
        return true;
    }
}