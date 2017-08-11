<?php
namespace controllers;

use models\Tasks;
use models\User;

class MainController extends Controller
{
    public function actionIndex(){
        if($_GET['page']==1){
            $this->redirect($this->compinePath());
        }
        if($_SESSION['task-create']==1){
            $taskCreate = 1;
            unset($_SESSION['task-create']);
        }else{
            $taskCreate = 0;
        }
        $tasks = new Tasks();
        $_GET['page']!=null&&$_GET['page']>1?$page=$_GET['page']:$page=1;

        return $this->render('index',['tasks'=>$tasks->getTasks(),'page'=>$page,'taskCreate'=>$taskCreate]);
    }

    public function actionLogin(){
        if($_POST['username']){
            $user = new User();
            $password = $user->selectOne('SELECT password FROM users WHERE username =\''.$_POST['username'].'\'');
            if(isset($password['password'])){
                $passwordForLogin = hash('sha256',$_POST['password']);
                if($password['password']==$passwordForLogin){
                    if (!isset($_SESSION['admin'])) $_SESSION['admin']=1;
                    $this->redirect('');
                }
            }
        }
        return $this->render('login',[]);
    }
    public function actionLogout(){
        unset($_SESSION['admin']);
        $this->redirect('');
    }

    private function compinePath(){
        if($_GET['order_username']||$_GET['order_email']||$_GET['order_status']){
            $gets = '?';
            if($_GET['order_username']){
                $gets .='order_username='.$_GET['order_username'].'&';
            }
            if($_GET['order_email']){
                $gets .='order_email='.$_GET['order_email'].'&';
            }
            if($_GET['order_status']){
                $gets .='order_email='.$_GET['order_email'].'&';
            }
            return substr($gets, 0, -1);
        }else{
            return '';
        }
    }
}