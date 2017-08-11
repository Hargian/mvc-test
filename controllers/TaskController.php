<?php

namespace controllers;


use models\Tasks;

class TaskController extends Controller
{
    public function actionNew(){
        if($_POST['username']!=null){
            $uploadfile = 'design/images/'.basename($_FILES['image']['name']);
            copy($_FILES['image']['tmp_name'], $uploadfile);
            $task = new Tasks();
            $task->username = $_POST['username'];
            $task->email = $_POST['email'];
            $task->title = $_POST['title'];
            $task->description = $_POST['description'];
            $task->image = $uploadfile;
            $task->status = 1;
            $task->save();
            $_SESSION['task-create']=1;
            $this->redirect('');
        }
        return $this->render('new-task',[]);
    }
}