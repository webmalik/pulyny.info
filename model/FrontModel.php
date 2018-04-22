<?php
    class FrontModel {

        protected $paramsPath;
        protected $params;

        public static function getSelect($table, $params = array(), $where = Null, $order = Null, $limit = Null, $offset = Null) {
            $settingsPath = ROOT . "/config/config.php";
            $settings = include($settingsPath);
            $table = $settings['prefix'].$table;

            $db = DataBase::getConnection();
            $sel = "SELECT * FROM $table ";
            if (isset($where)) {
                $sel = $sel.$where;
            }
            if(isset($order)) {
                $sel = $sel.$order;
            }
            if (isset($limit)) {
                $sel = $sel.$limit;
            }
            if(isset($offset)) {
                $sel = $sel.$offset;
            }
            // Запрос к БД
            $query = $db->query($sel);

            // Получение и возврат результатов
            $i = 0;
            $result = array();
            while ($row = $query->fetch()) {
                for($p=0; $p < count($params); $p++) {
                    $result[$i][$params[$p]] = $row[$params[$p]];
                }
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
            print_r($val);
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
    }
