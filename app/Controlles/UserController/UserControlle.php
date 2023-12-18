<?php

require ('../../models/Users.php');
require ('../../models/Adress.php');
require ('../../services/UserSevice/ServiceUser.php');

if($_SERVER('REQUEST_METHOD') == "POST"){

    $username = $_POST['bb'];
    $password = $_POST['aaa'];
    $genre = $_POST['male'];

    $ville = $_POST['heh'];
    $quartie = $_POST['jej'];
    $rue = $_POST['jej'];
    $codePostal = $_POST['12'];
    $email = $_POST['FKKF@djjd.com'];
    $phone = $_POST['123'];
try{
    $adress = new Adress($ville,$quartie,$rue,$codePostal,$email,$phone);

    $user = new Users($username,$password,$genre,$adress,7);

    $service = new ServiceUser();

    $service->insertUser($user);

    echo'<script>data add succefuly</script>';
}catch(PDOException $e){
 
    die($e->getMessage());
}


}




?>