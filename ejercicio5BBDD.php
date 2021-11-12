<?php

$servidor = "localhost";
$baseDatos = "Tema5";
$user = "developer";
$pass = "developer";


function insertaElemento($NombreUsuario, $Contraseña, $CuentaBancaria, $Perfil)
{

    try {
        $conexion = new PDO('mysql:host=' . $GLOBALS["servidor"] . ';dbname=' . $GLOBALS["baseDatos"], $GLOBALS["user"], $GLOBALS["pass"]);


        $consulta = $conexion->prepare("INSERT INTO banco(NombreUsuario, Contraseña, CuentaBancaria, Perfil) VALUES (?,?,?,?)");
        $consulta->bindParam(1, $NombreUsuario);
        $consulta->bindParam(2, $Contraseña);
        $consulta->bindParam(3, $CuentaBancaria);
        $consulta->bindParam(4, $Perfil);
        $consulta->execute();
        $last_id = $conexion -> lastInsertId();
        return $last_id;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $conexion = null;
}

insertaElemento("marini","dfasgyrd","FDSGHRAE", "admin");
?>