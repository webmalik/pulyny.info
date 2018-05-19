<?php

class Advertisement extends FrontModel {

    public static function getAllDescAdvertisement() {
         return self::getItem("advertisement", array("id", "description", "title", "image", "slug"),"","ORDER BY id DESC");
    }

    public static function getAllDescAdvertisementLimit() {
        $limit = 5;
         return self::getItem("advertisement", array("id", "description", "title", "slug"),"","ORDER BY `id` DESC", " LIMIT ".$limit);
    }

    public static function getAdvertisement($slug) {
         return self::getItem("advertisement", array("id",  "text", "image", "title", "description", "slug"), "slug=\"".$slug."\"");
    }

    public static function addAdvertisement($params) {
        return self::addItem("advertisement", $params);
    }

    public static function editAdvertisement($params, $where) {
        return self::editItem("advertisement", $params, $where);
    }

    public static function deleteAdvertisement($slug) {
        return self::deleteItem("advertisement", $slug);
    }
}