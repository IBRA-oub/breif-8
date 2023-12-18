<?php

    require_once ("../app/models/dataBase.php");

    $db = new DataBase();

    print_r($db->connection());

?>