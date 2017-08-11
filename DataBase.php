<?php


class DataBase
{
    private $host = '127.0.0.1';
    private $database   = 'mvc_test';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8';

    public $command;

    function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->database;charset=$this->charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->command = new PDO($dsn, $this->user, $this->pass, $opt);
    }

}