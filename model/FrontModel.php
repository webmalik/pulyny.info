<?php
    class FrontModel {

        protected $paramsPath;
        protected $params;

        public static function getSelect($table, $params = array(), $where = Null, $order = Null) {
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
    }
