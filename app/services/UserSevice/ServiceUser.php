<?php

require ('../../models/dataBase.php');
require('InterfaceUserService.php');
require('../../models/Users.php');

class ServiceUser extends DataBase implements InterfaceUserService{
    public function insertUser(Users $user){

        $pdo = $this->connection();

        
        $username = $user->getUsername();
        $password = $user->getPassword();
        $genre = $user->getGenre();
        $adrId=$user->getAdrId();
        $agencyId = $user->getAgencyId();


        $sql="INSERT INTO users(username,password,genre,adrId,agencyId,delete_check) VALUES ( :username, :password, :genre,:adrId,:agencyId,1)";

        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':genre',$genre);
        $stmt->bindParam(':adrId',$adrId);
        $stmt->bindParam(':agencyId',$agencyId);

        $stmt->execute();

    }

    function updateUser(Users $user){

        $pdo = $this->connection();

        $id = $user->getId();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $genre = $user->getGenre();
        $adrId=$user->getAdrId();
        $agencyId = $user->getAgencyId();

        $sql="UPDATE users SET  username=:username, password=:password, genre=:genre, adrId=:adrId, agencyId=:agencyId WHERE id=:id)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':username',$username);   
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':genre',$genre);
        $stmt->bindParam(':adrId',$adrId);
        $stmt->bindParam(':agencyId',$agencyId);

        $stmt->execute();

    }
function deleteUser($id){

 $pdo = $this->connection();

 $sql="DELETE FROM users WHERE id=:id";

 $stmt = $pdo->prepare($sql);
 $stmt->bindParam(':id',$id);

 $stmt->execute();

}
function displayUser(){

    $pdo=$this->connection();

    $sql="SELECT * FROM users";

    $data = $pdo->query($sql);
    $users = $data->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}
   
}

?>