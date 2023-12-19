<?php


require_once('InterfaceUserService.php');
require_once('../../models/Users.php');
require_once('../../models/dataBase.php');

class ServiceUser extends DataBase implements InterfaceUserService{
    public function insertUser(Users $user){

        $pdo = $this->connection();

        $ville = $user->getAdress()->getVille();
        $quartier = $user->getAdress()->getQuartier();
        $rue = $user->getAdress()->getRue();
        $codePostal = $user->getAdress()->getCodePostal();
        $email = $user->getAdress()->getEmail();
        $phone = $user->getAdress()->getPhone();

        $sqlT="INSERT INTO adress(ville,quartier, rue, codePostal,email,phone) VALUES(:ville,:quartier,:rue,:codePostal,:email,:phone);";

        $stmt = $pdo->prepare($sqlT);

        $stmt->bindParam(':ville',$ville);
        $stmt->bindParam(':quartier',$quartier);
        $stmt->bindParam(':rue',$rue);
        $stmt->bindParam(':codePostal',$codePostal);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':phone',$phone);

        $stmt->execute();

        $adressId = $pdo->lastInsertId();

        $username = $user->getUsername();
        $password = $user->getPassword();
        $genre = $user->getGenre();
        $agencyId = $user->getAgencyId();

       


    

        $sqlU="INSERT INTO users(username,pw,gendre,adrId,agencyId,delete_check) VALUES ( :username, :password, :genre,:adrId,:agencyId,1)";

        $stmt = $pdo->prepare($sqlU);
        
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':genre',$genre);
        $stmt->bindParam(':adrId',$adressId);
        $stmt->bindParam(':agencyId',$agencyId);

        $stmt->execute();

        $userId = $pdo->lastInsertId();
        return $userId;

    }

    public function updateUser(Users $user){

        $pdo = $this->connection();

        $id = $user->getAdress()->getId();
        $ville = $user->getAdress()->getVille();
        $quartier = $user->getAdress()->getQuartier();
        $rue = $user->getAdress()->getRue();
        $codePostal = $user->getAdress()->getCodePostal();
        $email = $user->getAdress()->getEmail();
        $phone = $user->getAdress()->getPhone();

        $sqlT="UPDATE adress SET ville=:ville, quartier=:quartier,rue=:rue,  quartier=:codePostal, email:email, phone=:phone WHERE id=:id";

        $stmt = $pdo->prepare($sqlT);

        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':ville',$ville);
        $stmt->bindParam(':quartier',$quartier);
        $stmt->bindParam(':rue',$rue);
        $stmt->bindParam(':codePostal',$codePostal);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':phone',$phone);

        $adressId = $pdo->lastInsertId();

        $id = $user->getId();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $genre = $user->getGenre();
       
        $agencyId = $user->getAgencyId();

        $sqlU="UPDATE users SET  username=:username, password=:password, genre=:genre, adrId=:adrId, agencyId=:agencyId WHERE id=:id";

        $stmt = $pdo->prepare($sqlU);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':username',$username);   
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':genre',$genre);
        $stmt->bindParam(':adrId',$adressId);
        $stmt->bindParam(':agencyId',$agencyId);

        $stmt->execute();

    }
public function deleteUser($id){

 $pdo = $this->connection();

 $sql="DELETE FROM users WHERE id=:id";

 $stmt = $pdo->prepare($sql);
 $stmt->bindParam(':id',$id);

 $stmt->execute();

}
public function displayUser(){

    $pdo=$this->connection();

    $sql="SELECT * FROM users";

    $data = $pdo->query($sql);
    $users = $data->fetchAll(PDO::FETCH_ASSOC);

    return $users;

}

// public function getUserName($username,$password){
//     $pdo=$this->connection();


//     $query = "SELECT * FROM users WHERE username = :username and password = :password";

//     $stmt = $pdo->prepare($query);

//     $login=$stmt->execute([
//         ":username" => $username,
//         ":password" => $password
//     ]);

//     if ($login) {
//         // Utilisez la méthode getRoleByUsername de ServiceUser pour obtenir le rôle de l'utilisateur
//         $pdo = $this->connection();

//         $query = new roleOfUser();


//         if ($roleName == "admin") {
//             $_SESSION["username"] = $username;
//             $_SESSION["role"] = "admin";
//             // redirect("../views/admin/bank.php", false);
//         } elseif ($roleName == "subadmin") {
//             $_SESSION["username"] = $username;
//             $_SESSION["role"] = "subadmin";
//             // redirect("../views/admin/bank.php", false);
//         } else {
//             $_SESSION["username"] = $username;
//             $_SESSION["role"] = "client";
//             // redirect("../views/client/index.php?id=" . $loggingUserData->userId, false);
//         }
//     } else {
//         // redirect("../views/login.php", false);
//     }
    

//     $data = null;

//     $data = $stmt->fetch(PDO::FETCH_OBJ);

//     $query = null;
//     $pdo = null;
//     return $data;
// }
   
}



?>