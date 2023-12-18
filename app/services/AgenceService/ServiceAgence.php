<?php
require ('../../models/dataBase.php');
require('InterfaceAgenceService.php');
require('../../models/Agence.php');

class ServiceAgence extends  DataBase implements InterfaceAgenceService{

    public   function insertAgence(Agence $agence){
        $pdo = $this->connection();

        $longitude = $agence->getLongitude();
        $latitude = $agence->getLatitude();
        $bankId = $agence->getBankId();
        $adrId = $agence->getBankId();


        $sql="INSERT INTO agency (longitude, latitude,bankId,adrId) VALUES (:longitude,:latitude,:bankId,:adrId);";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':longitude',$longitude);
        $stmt->bindParam(':latitude',$latitude);
        $stmt->bindParam(':bankId',$bankId);
        $stmt->bindParam(':adrId',$adrId);

        $stmt->execute();

    }

    function updateAgence(Agence $agence){
        $pdo = $this->connection();
        $id = $agence->getId();
        $longitude = $agence->getLongitude();
        $latitude = $agence->getLatitude();
        $bankId = $agence->getBankId();
        $adrId = $agence->getBankId();

        $sql="UPDATE agency SET longitude=:longitude, latitude=:latitude, bankId=:bankId, adrId=:adrId WHERE id=:id";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':longitude',$longitude);
        $stmt->bindParam(':latitude',$latitude);
        $stmt->bindParam(':bankId',$bankId);
        $stmt->bindParam(':adrId',$adrId);

        $stmt->execute();
    }
    function deleteAgence($id){
        $pdo = $this->connection();

        $sql="DELETE FROM agency WHERE id=:id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);

        $stmt->execute();

    }
    function displayAgence(){

        $pdo=$this->connection();

        $sql="SELECT * FROM agency";
    
        $data = $pdo->query($sql);
        $agency = $data->fetchAll(PDO::FETCH_ASSOC);
    
        return $agency;
    }
    

}



?>