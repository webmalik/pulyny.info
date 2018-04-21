<?php

class AdminController //extends FrontController
{
    public function actionIndex() {

        $template = new Template();
        $template->adminrender('about/index');
        return true;
    }
}