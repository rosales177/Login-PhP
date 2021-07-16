<?php
    require_once "conexion.php";

    $usu = $_POST{"user"};
    $pass = $_POST{"pass"};

    $sql = "SELECT * FROM credenciales WHERE NomUsu ='$usu' AND PasUsu = '$pass'";

    try{
        $stm = $conexion->prepare($sql);
        $stm->execute();

        $tabla = $stm->fetchAll();
    } catch(\Throwable $e){
        
        echo "Mensaje de Error: " . $e->getMessage();
    }

    if(count($tabla) == 0){
        echo "Incorrecto";
    }else{
        echo "Correcto";
    }

?>