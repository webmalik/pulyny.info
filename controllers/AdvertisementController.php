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

    public function actionAdd() {
        $advertisement = new Advertisement();
        $add_advertisement = "";
        $title = "";
        $description = "";
        $text = "";
        $slug = "";
        $image = "";
        $data = "";

        $errors = '';

        if(isset($_POST["submit"])) {

            $title = trim($_POST["title"]);
            $slug = trim($_POST["slug"]);
            $description = trim($_POST["description"]);
            $text = trim($_POST["text"]);

            if($_FILES['image']['size'] > 0) {
                $uploaddir = ROOT.'\uploads\advertisement\\'.$slug."_";
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                if(is_uploaded_file($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                }
                $image = trim("\uploads\advertisement\\".$slug."_".basename($_FILES['image']['name']));
            } else {
                $image = trim("\uploads\advertisement\\no-image.png");
            }

            if($errors == false) {
                $add_advertisement = $advertisement->addAdvertisement(array("title"=>$title, "slug"=>$slug, "description"=>$description, "text"=>$text, "image"=>$image));
            }
        }
        $data = array("result"=>$add_advertisement);
        $template = new Template();
        $template->render('advertisement/add', $data);
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