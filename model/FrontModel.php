<?php
    class FrontModel {

        protected $paramsPath;
        protected $params;

        public static function getItem($table, $params = array(), $where = "", $order = "", $limit = "", $offset = "") {
            $settingsPath = ROOT . "/config/config.php";
            $settings = include($settingsPath);
            $table = $settings['prefix'].$table;

            $db = DataBase::getConnection();
            $sel = "SELECT * FROM $table ";
            if (isset($where) && $where != NULL) {
                $sel = $sel." WHERE ".$where;
            }
            if(isset($order) && $order != NULL) {
                $sel = $sel." ".$order;
            }
            if (isset($limit) && $limit != NULL) {
                $sel = $sel." ".$sel.$limit;
            }
            if(isset($offset) && $offset != NULL) {
                $sel = $sel." ".$sel.$offset;
            }
            echo $sel;
            // Запрос к БД
            $query = $db->query($sel);

            // Получение и возврат результатов
            $i = 0;
            $result = array();
            while ($row = $query->fetch()) {
                for($p=0; $p < count($params); $p++) {
                    $result[$i][$params[$p]] = $row[$params[$p]];
                }
                $i++;
            }
            return $result;
        }

        public static function addItem($table, $params = array()) {
            $settingsPath = ROOT . "/config/config.php";
            $settings = include($settingsPath);
            $table = $settings['prefix'].$table;

            $db = DataBase::getConnection();

            foreach ($params as $key=>$value) {
                $keys[] = $key;
                $val[] = $value;
            }
            $limit = count($keys) - 1;
            $sql = 'INSERT INTO '.$table.' (';
            for ($p = 0; $p < count($keys); $p++) {
                if ($p == $limit)
                    $sql = $sql . '`' . $keys[$p] . '`)';
                else
                    $sql = $sql . '`' . $keys[$p] . '`, ';
            }
            $sql = $sql . " VALUES (";
            for ($p = 0; $p < count($keys); $p++) {
                if ($p == $limit)
                    $sql = $sql . ':' . $keys[$p] . ')';
                else
                    $sql = $sql . ':' . $keys[$p] . ', ';
            }
            $result = $db->prepare($sql);
            for ($p = 0; $p < count($keys); $p++) {
                $result->bindParam(':' . $keys[$p], $val[$p], PDO::PARAM_STR);
            }
            $result->execute();
            return $result;
        }

        public static function editItem($table, $params = array(), $where) {
            $settingsPath = ROOT . "/config/config.php";
            $settings = include($settingsPath);
            $table = $settings['prefix'].$table;

            $db = DataBase::getConnection();

            foreach ($params as $key=>$value) {
                $keys[] = $key;
                $val[] = $value;
            }
            $limit = count($keys) - 1;

            $sql = "UPDATE ".$table." SET ";
            for ($p = 0; $p < count($keys); $p++) {
                if ($p == $limit)
                    $sql = $sql.$keys[$p].'=:'.$keys[$p]." ";
                else
                    $sql = $sql.$keys[$p].'=:'.$keys[$p].", ";
            }
            $sql = $sql."WHERE ".$where;

            $result = $db->prepare($sql);
            for ($p = 0; $p < count($keys); $p++) {
                $result->bindParam(':' . $keys[$p], $val[$p], PDO::PARAM_STR);
            }
            $result->execute();
            return $result;
        }

        public static function deleteItem($table, $id) {
            $settingsPath = ROOT . "/config/config.php";
            $settings = include($settingsPath);
            $table = $settings['prefix'].$table;

            $db = DataBase::getConnection();

            $sql = 'DELETE FROM '.$table.' WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            return $result->execute();
        }
    }
