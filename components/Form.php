<?php

class Form
{

    public static function addInputText($name, $label, $val="") {

        echo "<div class=\"input-field\">";
        echo "<input name=\"$name\" type=\"text\" class=\"validate\" value=\"";
        if(isset($val[$name])){
            echo $val[$name];
        }else {
            echo "";
        }
        echo "\"/>";
        echo "<label for=\"$name\"";
        if(isset($val[$name])){
            echo "class=\"active\">$label</label>";
        }else {
            echo "class=\"\">$label</label>";
        }
        echo "</div>";

    }
    
    public static function addButtonSubmit($label) {

        echo "<button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"submit\"><i class='fa fa-plus left'></i>$label</button>";

    }

    public static function addSelect($list, $name, $label, $val="") {

        echo "<label for=\"$name\">$label:</label>";
        echo "<select name=\"$name\">";
             if (is_array($list)) {
                    foreach ($list as $item) {
                        if($item['id'] == $val) {
                            echo "<option selected value=".$item['id'].">";
                        } else {
                            echo "<option value=".$item['id'].">";
                        }
                            echo $item["last_name"].' '.$item["first_name"].' '.$item["middle_name"];
                        echo "</option>";
                    }
             }
        echo "</select>";

    }

    public static function addSelectUserVydatku($list, $name, $label, $val="") {

        echo "<label for=\"$name\">$label:</label>";
        echo "<select name=\"$name\">";
        if (is_array($list)) {
            foreach ($list as $item) {
                if($item['viddil'] == 2) {
                    if($item['id'] == $val) {
                        echo "<option selected value=".$item['id'].">";
                    } else {
                        echo "<option value=".$item['id'].">";
                    }
                }
                echo $item["last_name"].' '.$item["first_name"].' '.$item["middle_name"];
                echo "</option>";
            }
        }
        echo "</select>";

    }

}