<?php

class Articles extends FrontModel {

    public static function getAllDescArticles() {
         return self::getItem("articles", array("id", "name", "description", "title"));
    }

    public static function getArticle($name) {
         return self::getItem("articles", array("id", "name", "text", "title"), $name);
    }

    public static function addArticle($params) {
        return self::addItem("articles", $params);
    }

    public static function editArticle($params, $where) {
        return self::editItem("articles", $params, $where);
    }

    public static function deleteArticle($id) {
        return self::deleteItem("articles", $id);
    }
}