<?php

class Template {

    public $content = "";

    public function getLayout($layout){
        $content = $this->content;
        $main_template = 'view/'.$layout.'.php';
        require_once $main_template;
    }

    public function render($template,$args = array()){
        if(isset($args)){
            foreach ($args as $key=>$value) {
                ${$key} = $value;
            }
        }
        $template = 'view/'.$template.'.php';
        if(file_exists($template) == true){
            ob_start();
            require_once $template;
            $this->content = ob_get_contents();
            ob_end_clean();
            $this->getLayout("main");
        }
        else throw new Exception('File '. ROOT.'template/'.$template.'.php not found');
    }

    public function adminrender($template,$args = array()){
        if(isset($args)){
            foreach ($args as $key=>$value) {
                ${$key} = $value;
            }
        }
        $template = 'view/'.$template.'.php';
        if(file_exists($template) == true){
            ob_start();
            require_once $template;
            $this->content = ob_get_contents();
            ob_end_clean();
            $this->getLayout("admin");
        }
        else throw new Exception('File '. ROOT.'template/'.$template.'.php not found');
    }

}