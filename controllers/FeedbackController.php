<?php

class FeedbackController //extends FrontController
{
    public function actionIndex() {

        $template = new Template();
        $template->render('feedback/index');
        return true;
    }
}