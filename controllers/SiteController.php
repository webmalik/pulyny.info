<?php

class SiteController //extends FrontController
{
    public function actionIndex() {

        $template = new Template();
        $template->render('site/index');
        return true;
    }
}