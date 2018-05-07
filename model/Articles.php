<?php

class Articles extends FrontModel {

    public static function getAllDescArticles() {
         return self::getItem("articles", array("id", "name", "description", "title", "image"),"","ORDER BY id DESC");
    }

    public static function getArticle($name) {
         return self::getItem("articles", array("id", "name", "text", "image", "title", "description", "meta_description", "meta_keywords"), "name=\"".$name."\"");
    }

    public static function addArticle($params) {
        return self::addItem("articles", $params);
    }

    public static function editArticle($params, $where) {
        return self::editItem("articles", $params, $where);
    }

    public static function deleteArticle($slug) {
        return self::deleteItem("articles", $slug);
    }
}