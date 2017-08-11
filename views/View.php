<?php


namespace views;


class View
{
    public function render($view,$variables = array()){
        require 'layout.php';
        return true;
    }
}