<?php

class ObeyedController //extends FrontController
{
    public function actionIndex() {

        $template = new Template();
        $template->render('obeyed/index');
        return true;
    }
}