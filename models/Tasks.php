<?php

namespace models;


class Tasks extends Model
{
    public $id;
    public $username;
    public $email;
    public $title;
    public $description;
    public $image;
    public $status;

    public function getTable(){
        return 'tasks';
    }

    public function getTasks(){
        if($_GET['order_username']||$_GET['order_email']||$_GET['order_status']){
            $orderBy = 'ORDER BY ';
            if($_GET['order_username']){
                $orderBy .=' username '.$_GET['order_username'].',';
            }
            if($_GET['order_email']){
                $orderBy .=' email '.$_GET['order_email'].',';
            }
            if($_GET['order_status']){
                $orderBy .=' status '.$_GET['order_status'].',';
            }
            $orderBy = substr($orderBy, 0, -1);
        }else{
            $orderBy = '';
        }

        if($_GET['page']!=null){

            $tasks = $this->select('SELECT * FROM tasks '.$orderBy.' LIMIT '.($_GET['page']*3-3).', 3');
        }else{
            $tasks = $this->select('SELECT * FROM tasks '.$orderBy.' LIMIT 0, 3');
        }
        return $tasks;
    }

}