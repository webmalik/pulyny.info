<?php

class ChatController //extends FrontController
{
    public function actionIndex() {

        $template = new Template();
        $template->render('chat/index');
        return true;
    }
}