<?php

require_once ('../../models/Users.php');
require_once ('../../models/Adress.php');
require_once ('../../services/UserSevice/ServiceUser.php');

//  if($_SERVER('REQUEST_METHOD') == "POST"){
echo "testing";
    $username = 'bb';
    $password = 'aaa';
    $genre = 'male';

    $ville = 'heh';
    $quartie = 'jej';
    $rue = 'jej';
    $codePostal = '12';
    $email = 'FKKF@djjd.com';
    $phone = '123';
    
try{
    $adress = new Adress($ville,$quartie,$rue,$codePostal,$email,$phone);

    $user = new Users($username,$password,$genre,$adress,7);

    $service = new ServiceUser();

    $service->insertUser($user);

    echo'<script>data add succefuly</script>';
}catch(PDOException $e){
 
    die($e->getMessage());
}


//  }




?>