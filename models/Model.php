<?php
namespace models;



abstract class Model
{
    public $db;

    function __construct() {
        $this->db = new \DataBase();
    }

    public function select($query){
        return $this->db->command->query($query)->fetchAll();
    }

    public function selectOne($query){
        return $this->db->command->query($query)->fetch();
    }

    public function getOne($id){
        $result = $this->db->command->query('SELECT * FROM '.$this->getTable().' WHERE id ='.$id)->fetch();
        foreach($this as $k =>$v){
            $this->$k = $result[$k];
        }
        return $this;
    }

    public function save(){
        $table = $this->getTable();
        if($this->id!=null){
            $setStr = '';
            foreach($this as $k =>$v){
                if($k!='db'&&$k!='id'&&$v!=null) {
                    if (is_string($v)) {
                        $setStr .= $k.' = '.'\''.$v.'\',';
                    }else{
                        $setStr .= $k.' = '.$v.',';
                    }
                }
            }
            $this->db->command->query('UPDATE '.$table.' SET '.substr($setStr, 0, -1).' WHERE id='.$this->id)->execute();
        }else{
            $keys = '';
            $values = '';
            foreach($this as $k =>$v){
                if($k!='db'&&$k!='id'){
                    if(is_string($v)){
                        $keys .= $k.',';
                        $values .= '\''.$v.'\',';
                    }else{
                        $keys .= $k.',';
                        $values .= $v.',';
                    }
                }
            }
            $this->db->command->query('INSERT INTO '.$table.' ('.substr($keys, 0, -1).') VALUES ('.substr($values, 0, -1).')')->execute();
        }
    }
}