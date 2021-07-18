<?php
    session_start();
    require_once "conexion.php";
    require_once "secciones.php";

    $objSess = new Session();
    $usu = $_POST{"user"};
    $pass = $_POST{"pass"};

    $sql = "SELECT CodUsu, NomUsu, PasUsu FROM credenciales WHERE NomUsu ='$usu' AND PasUsu = '$pass'";

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
        
        $objSess->init();
        $objSess->set('user', $user);
        $objSess->set('pass', $pass);
        echo "Correcto";
        
    }

?>