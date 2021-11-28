<?php
$servidor = "localhost";
$baseDatos = "Tema5";
$user = "developer";
$pass = "developer";


function getUser($usuario){

    try {
        $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS['user'], $GLOBALS['pass']);
        $consulta =$conexion->prepare("SELECT `NombreUsuario`,`contrasenya`,`Perfil`FROM banco WHERE NombreUsuario=:NombreUsuario");         
        $parametros = array(":NombreUsuario"=>$usuario);
        $consulta->execute($parametros);
        $resultado=$consulta->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;

    } catch (PDOException $e) {
        return false;
    }
}

?>