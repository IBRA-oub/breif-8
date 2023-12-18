<?php


require('InterfaceUserService.php');
require('../../models/Users.php');

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

        $adressId = $pdo->lastInsertId();

        $username = $user->getUsername();
        $password = $user->getPassword();
        $genre = $user->getGenre();
        $agencyId = $user->getAgencyId();

       


    

        $sqlU="INSERT INTO users(username,password,genre,adrId,agencyId,delete_check) VALUES ( :username, :password, :genre,:adrId,:agencyId,1)";

        $stmt = $pdo->prepare($sqlU);
        
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':genre',$genre);
        $stmt->bindParam(':adrId',$adressId);
        $stmt->bindParam(':agencyId',$agencyId);

        $stmt->execute();

    }

    function updateUser(Users $user){

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