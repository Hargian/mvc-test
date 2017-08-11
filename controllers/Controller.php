<?php

namespace controllers;

use views\View;

abstract class Controller
{
    public function render($view,$variables){
        $newView = new View();
        return $newView->render($view,$variables);
    }

    public function redirect($path){
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/'.$path);
        exit();
    }

}