<?php

class Compte{

    private $id;
    private $balance;
    private $RIB;

    public function __construct($id, $balance, $RIB){
        $this->id=$id;
        $this->balance=$balance;
        $this->RIB=$RIB;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getBalance(){
        return $this->balance;
    }

    public function setBalance($balance){
        $this->balance=$balance;
    }

    public function getRIB(){
        return $this->RIB;
    }

    public function setRIB($RIB){
        $this->RIB=$RIB;
    }
    
}



?>