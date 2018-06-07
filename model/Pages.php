<?php

class Pages extends FrontModel {

    public static function getPage($name) {
        return self::getItem("pages", array("id", "name", "text", "title", "meta_description", "meta_keywords"), "name=\"".$name."\"");
    }

    public static function getAllPages() {
        return self::getItem("pages", array("id", "name", "text", "title", "meta_description", "meta_keywords"));
    }

    public static function addPages($params) {
        return self::addItem("pages", $params);
    }

    public static function editPages($params, $where) {
        return self::editItem("pages", $params, $where);
    }

    public static function deletePages($slug) {
        return self::deleteItem("pages", $slug);
    }
}