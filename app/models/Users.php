<?php



class Users  {

private $id;
private $username;
private $password;
private $genre;
private $adress;
private $agencyId;
public function __construct( $username, $password, $genre, Adress $adress,$agencyId){
   
    $this->username = $username;
    $this->password = $password;
    $this->genre = $genre;
    $this->adress = $adress;
    $this->agencyId = $agencyId;
    
}

public function getId(){
    return $this->id;
}




public function getUsername(){
      return $this->username;
}

public function setUsername($username){

    $this->username = $username;
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

public function getAdress(){
    return $this->adress;
}


public function getAgencyId(){
    return $this->agencyId;
}


    
}




?>