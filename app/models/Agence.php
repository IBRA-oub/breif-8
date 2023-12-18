<?php

class Agence{
    private $id;
    private $longitude;
    private $latitude;

    public function __construct($id, $longitude, $latitude){
        $this->id = $id;
        $this->longitude = $longitude;
        $this->latitude = $latitude;

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


}


?>