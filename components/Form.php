<?php

class Form
{

    public static function addInputText($name, $label, $val="") {

        echo "<label for=\"$name\">$label:</label>";
        echo "<input type=\"text\" name=\"$name\" value=\"";
            if($val != ""){
                echo $val[$name];
            }
        echo "\" placeholder=\"$label\" required oninvalid=\"this.setCustomValidity('Неправильно введене $label')\" />";

    }
    
    public static function addInputTextNR($name, $label, $val="") {

        echo "<label for=\"$name\">$label:</label>";
        echo "<input type=\"text\" name=\"$name\" value=\"";
            if($val != ""){
                echo $val[$name];
            }
        echo "\" placeholder=\"$label\"/>";

    }

    public static function addButtonSubmitK($label) {

        echo "<button class=\"btn btn-success btn-md \" name=\"submit\" type=\"submit\">$label</button>";

    }
    
    public static function addButtonSubmit($label) {

        echo "<button class=\"submit\" name=\"submit\" type=\"submit\">$label</button>";

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