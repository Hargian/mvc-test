<?php
require('DataBase.php');
require ('Routing.php');
require ('views/View.php');
require ('controllers\Controller.php');
$models = scandir ('models');
for($i=2;$i<count($models);$i++){
    require ('models\\'.$models[$i]);
}