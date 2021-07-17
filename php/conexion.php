<?php

use FFI\Exception;
//[Conexión Remota]
/*
$host = "mysql:host=192.168.1.3;port=3306;dbname=Crud";
    $user = "Rosalesonly";
    $pass = "Rosales@1015";
    */
//[Conexión local]

  $host = "mysql:host=127.0.0.1;port=3306;dbname=Crud";
    $user = "Rosales";
    $pass = "1015";
    try{
        $conexion = new PDO($host,$user,$pass);
    }catch(PDOException $e){
        echo "Message Error :".$e;
    }
?>