<?php

class Adress{
    private $id;
    private $ville;
    private $quartier;
    private $rue;
    private $codePostal;
    private $email;
    private $phone;

    public function __construct(  $ville, $quartier, $rue, $codePostal, $email, $phone){
        
        $this->ville = $ville;
        $this->quartier = $quartier;
        $this->rue = $rue;
        $this->codePostal = $codePostal;
        $this->email = $email;
        $this->phone = $phone;
    }


    public function getId(){
        return $this->id;

    }

    

    public function getVille(){
        return $this->ville;
    }
    public function setVille($ville){

        $this->ville = $ville;
}

    public function getQuartier(){
        return $this->quartier;
    }

    public function setQuartier($quartier){
        $this->quartier = $quartier;
    }

    public function getRue(){
        return $this->rue;
    }

    public function setRue($rue){
        $this->rue=$rue;
    }

    public function getCodePostal(){
        return $this->codePostal;
    }

    public function setCodePostal($codePostal){
        $this->codePostal=$codePostal;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone){
        $this->phone=$phone;
    }








}



?>