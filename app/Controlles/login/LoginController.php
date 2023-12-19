<?php

require_once ('../../models/dataBase.php');

// if(isset($_POST['login'])){

// $username = $_POST['name'];
$username = 'bb';
// $password = $_POST['password'];
$password = 'aaa';

$con= new DataBase();
$pdo = $con->connection();
$sql="SELECT * FROM `users` WHERE username = :username ";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    echo 'Login done';
    if ($password == $row['pw']) {
        echo 'Login done';

        // session_start();
        // $_SESSION['user_id'] = $row['userId'];

        $roleSql = "SELECT * FROM `roleofuser` WHERE userId = :userId   ";

        $roleStmt = $pdo->prepare($roleSql);
        $roleStmt->bindParam(':userId', $row['userId']);
        $roleStmt->execute();

        $roleRow = $roleStmt->fetch(PDO::FETCH_ASSOC);

        if ($roleRow && isset($roleRow['roleName']) && $roleRow['roleName'] == "admin") {
            header("location: display.php");
            exit();
        } else {
             header("location: client.php");
            // var_dump($roleRow['roleName']);
            exit();
        }
    } else {
        echo 'Password invalid';
    }
}
    
// }






?>