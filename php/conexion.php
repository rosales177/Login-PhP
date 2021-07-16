<?php

use FFI\Exception;

$host = "mysql:host=192.168.1.3;port=3306;dbname=Crud";
    $user = "Rosalesonly";
    $pass = "Rosales@1015";

    try{
        $conexion = new PDO($host,$user,$pass);
    }catch(PDOException $e){
        echo "Message Error :".$e;
    }
?>