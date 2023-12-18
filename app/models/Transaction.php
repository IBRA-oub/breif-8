<?php

class Transaction{
    private $id;
    private $type;
    private $amount;

    public function __construct($id, $type, $amount){
        $this->id = $id;
        $this->type = $type;
        $this->amount = $amount;
    }


public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

public function getType(){
    return $this->type;
}

public function setType($type){
    $this->type = $type;
}

public function getAmount(){
    return $this->amount;
}

public function setAmount($amount){
    $this->amount = $amount;
}
}


?>