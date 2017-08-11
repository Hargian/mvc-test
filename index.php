<?php
session_start();
require ('requires.php');

$routing = new Routing();
$routing->action = $_GET['action'];
$routing->controller = $_GET['controller'];

unset($_GET['action'],$_GET['controller']);

$routing->activate();


