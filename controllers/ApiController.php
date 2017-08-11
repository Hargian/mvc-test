<?php

namespace controllers;

use models\Tasks;

class ApiController extends Controller
{
    public function actionUpdate(){
        $task = new Tasks();
        $k = $_GET['name'];
        $task->id = $_GET['id'];
        $task->$k = $_GET['value'];
        $task->save();
    }
}