<?php
require_once('InterfaceRoleOfUser.php');
require_once('../../models/RoleOfUser.php');

class serviceRoleOfUser extends DataBase implements RoleOfUserInterface{

    public function addRolesofuser(roleOfUser $roleOfuser){

        $pdo = $this->connection();

        $roleName = $roleOfuser->getRoleName();
        $userId = $roleOfuser->getuserId();

        $sql = "INSERT INTO roleofuser (userId,roleName)  VALUES ( :userId,:roleName)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":userId", $userId);
        $stmt->bindParam(":roleName", $roleName);

        $stmt->execute();
    }



}



?>