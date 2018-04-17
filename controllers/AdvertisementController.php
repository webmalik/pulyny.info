<?php

class AdvertisementController //extends FrontController
{
    public function actionIndex() {

        $template = new Template();
        $template->render('advertisement/index');
        return true;
    }
}