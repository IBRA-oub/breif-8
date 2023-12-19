<?php

require_once('InterfaceLoginService.php');
require_once('../../models/dataBase.php');
require_once('../../models/Users.php');

// class ServiceLogin extends DataBase implements InterfaceLoginService{

    

//         public function login($username, $pw) {
//             // Utilisez la méthode getUserName de ServiceUser pour obtenir les informations de l'utilisateur
//             $userService = new ServiceUser();
//             $loggingUserData = $userService->getUserName($username);
    
//             if ($loggingUserData && password_verify($pw, $loggingUserData->pw)) {
//                 // Utilisez la méthode getRoleByUsername de ServiceUser pour obtenir le rôle de l'utilisateur
//                 $roleOfLoggingUserData = $userService->getRoleByUsername($username);
    
//                 if ($roleOfLoggingUserData->roleName == "admin") {
//                     $_SESSION["username"] = $username;
//                     $_SESSION["role"] = "admin";
//                     redirect("../views/admin/bank.php", false);
//                 } elseif ($roleOfLoggingUserData->roleName == "subadmin") {
//                     $_SESSION["username"] = $username;
//                     $_SESSION["role"] = "subadmin";
//                     redirect("../views/admin/bank.php", false);
//                 } else {
//                     $_SESSION["username"] = $username;
//                     $_SESSION["role"] = "client";
//                     redirect("../views/client/index.php?id=" . $loggingUserData->userId, false);
//                 }
//             } else {
//                 redirect("../views/login.php", false);
//             }
//         }
    
    
    
        
        

        

//     }

    




?>