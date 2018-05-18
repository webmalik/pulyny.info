<?php

class Advertisement extends FrontModel {

    public static function getAllDescAdvertisement() {
         return self::getItem("advertisement", array("id", "description", "title", "image", "slug"),"","ORDER BY id DESC");
    }

    public static function getAdvertisement($slug) {
         return self::getItem("advertisement", array("id",  "text", "image", "title", "description", "slug"), "slug=\"".$slug."\"");
    }

    public static function addAdvertisement($params) {
        return self::addItem("articles", $params);
    }

    public static function editAdvertisement($params, $where) {
        return self::editItem("advertisement", $params, $where);
    }

    public static function deleteAdvertisement($slug) {
        return self::deleteItem("articles", $slug);
    }
}