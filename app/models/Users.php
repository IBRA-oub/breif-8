<?php

class Users extends DataBase {

private $id;
private $username;
private $password;
private $genre;
private $adreesId;

private $adressId;
public function __construct($id, $username,$adressId, $password, $genre){
    $this->id = $id;
    $this->username = $username;
    $this->adressId = $adressId;
    $this->password = $password;
    $this->genre = $genre;
    
}

public function getId(){
    return $this->id;
}

public function setId($id){

    $this->id = $id;
}


public function getUsername(){
      return $this->username;
}

public function setUsername($username){

    $this->username= $username;
}

public function getPassword(){
    return $this->password;
}

public function setPassword($password){

    $this->password= $password;
}

public function getGenre(){
    return $this->genre;
}

public function setGenre($genre){

    $this->genre = $genre;
}



    
}




?>