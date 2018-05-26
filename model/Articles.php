<?php

class Articles extends FrontModel {

    public static function getAllDescArticles() {
        return self::getItem("articles", array("id", "name", "description", "title", "image"),"","ORDER BY id DESC");
    }

    public static function getArticle($name) {
        return self::getItem("articles", array("id", "name", "text", "image", "title", "description", "meta_description", "meta_keywords"), "name=\"".$name."\"");
    }

    public static function getCommentsArticle($id) {
        return self::getItem("comments", array("id",  "text", "user", "date"), "news=\"".$id."\"", "ORDER BY date DESC");
    }

    public static function addCommentsArticle($params) {
        return self::addItem("comments", $params);
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