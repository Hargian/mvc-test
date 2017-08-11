<?php


class Routing
{
    public $controller;
    public $action;
    public function activate(){

        if($this->controller ==NULL) $this->controller = 'main';

        $first = substr($this->controller,0,1);
        $this->controller = str_replace($first,strtoupper($first),$this->controller);

        if($this->action==NULL) $this->action = 'index';

        if(!file_exists($_SERVER['DOCUMENT_ROOT'].'\controllers\\'.$this->controller.'Controller.php')){

            $this->action = $this->controller;
            $this->controller = 'Main';
        }
        /*$controller = 'controllers/'.$this->controller.'Controller';
        var_dump($controller);
        require ($controller.'.php');
        eval('$controller = new \\'.$controller.'();');*/
        require ('controllers/'.$this->controller.'Controller.php');
        eval('$controller = new \controllers\\'.$this->controller.'Controller();');
        $first = substr($this->action,0,1);
        eval('return $controller->action'.str_replace($first,strtoupper($first),$this->action).'();');
    }
}