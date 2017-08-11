<?php


namespace models;


class User extends Model
{
    public $id;
    public $username;
    public $email;
    public $password;
    public $status;

    public function passwordHash()
    {
        $this->password = hash('sha256', $this->password);
    }

    public function getTable(){
        return 'users';
    }


}