<?php

$servidor = "localhost";
$baseDatos = "Tema5";
$user = "developer";
$pass = "developer";


function getUser($NombreUsuario)
{

    try {
        $conexion = new PDO('mysql:host=' . $GLOBALS["servidor"] . ';dbname=' . $GLOBALS["baseDatos"], $GLOBALS["user"], $GLOBALS["pass"]);


        $consulta = "SELECT * FROM banco WHERE NombreUsuario=?";
        $consulta = $conexion->prepare($consulta);
        $consulta->bindParam(1, $NombreUsuario);
        $consulta->execute();
        $elemento = $consulta->fetch(PDO::FETCH_ASSOC);
        return $elemento;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $conexion = null;
}



?>