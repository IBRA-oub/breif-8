<?php

require_once ('../../models/Users.php');
require_once ('../../models/Adress.php');
require_once ('../../services/UserSevice/ServiceUser.php');
require_once ('../../services/RoleOfUserService/ServiceRoleOfUser.php');

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
    $role='admin';
try{
    // create adrees first objet, and put items in place
    $adress = new Adress($ville,$quartie,$rue,$codePostal,$email,$phone);

    // create user objet, and put items in place

    $user = new Users($username,$password,$genre,$adress,7);

   
    // call function to inset information into two table
    $service = new ServiceUser();

     // get user id and insert data into table
    $userId = $service->insertUser($user);

    $roleofuser= new RoleOfUser($userId,$role);

    $userRole= new ServiceRoleOfUser();
    $userRole->addRolesofuser( $roleofuser);


    echo'<script>data add succefuly</script>';
}catch(PDOException $e){
 
    die($e->getMessage());
}


//  }




?>