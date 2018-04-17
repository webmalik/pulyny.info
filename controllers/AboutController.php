<?php

class AboutController //extends FrontController
{
    public function actionIndex() {

        $template = new Template();
        $template->render('about/index');
        return true;
    }
}