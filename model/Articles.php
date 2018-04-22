<?php

class Articles extends FrontModel {

    public static function getAllDescArticles() {
         return self::getSelect("articles", array("id", "name", "description", "title"));
    }

    public static function getArticle($name) {
         return self::getSelect("articles", array("id", "name", "text", "title"), $name);
    }
}