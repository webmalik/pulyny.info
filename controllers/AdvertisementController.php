<?php

class AdvertisementController //extends FrontController
{
    public function actionIndex() {
        $advertisement = new Advertisement();
        $advertisements = $advertisement->getAllDescAdvertisement();
        $template = new Template();
        $template->render('advertisement/index', array("advertisements" => $advertisements));
        return true;
    }

    public function actionView($slug) {
        $advertisement = new Advertisement();
        $advertisements = $advertisement->getAdvertisement($slug);
        $template = new Template();
        $template->render('advertisement/view', array("advertisements" => $advertisements));
        return true;
    }
}