<?php

class Users extends DataBase {

private $id;
private $username;
private $password;
private $genre;
private $adrId;
private $agencyId;
public function __construct($id, $username, $password, $genre,$adrId,$agencyId){
    $this->id = $id;
    $this->username = $username;
    $this->password = $password;
    $this->genre = $genre;
    $this->adrId = $adrId;
    $this->agencyId = $agencyId;
    
}

public function getId(){
    return $this->id;
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

public function getAdrId(){
    return $this->adrId;
}


public function getAgencyId(){
    return $this->agencyId;
}


    
}




?>