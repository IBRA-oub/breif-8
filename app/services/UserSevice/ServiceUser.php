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
        

        $sql="INSERT INTO users(username,adress,password,genre,delete_check) VALUES ( :username, :password, :genre,1)";

        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':genre',$genre);

        $stmt->execute();

    }

    function updateUser(Users $user){

        $pdo = $this->connection();

        $id = $user->getId();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $genre = $user->getGenre();

        $sql="UPDATE users SET  username=:username, password=:password, genre=:genre WHERE id=:id)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':username',$username);   
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':genre',$genre);

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