<?php

class Destributeur{
    private $id;
    private $longitude;
    private $latitude;
    private $adress;

    public function __construct($id, $longitude, $latitude,$adress){
        $this->id = $id;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->adress = $adress;

    }

    public function getId(){
        return $this->id;

    }

    public function setId($id){
        $this->id = $id;
    }

    public function getLongitude(){
        return $this->longitude;

    }

    public function setLongitude($longitude){
        $this->longitude = $longitude;
    }

    public function getLatitude (){
        return $this->latitude ;

    }

    public function setLatitude ($latitude ){
        $this->latitude  = $latitude ;
    }

    public function getAdress (){
        return $this->adress ;

    }

    public function setAdress ($adress ){
        $this->adress  = $adress ;
    }
}






?>