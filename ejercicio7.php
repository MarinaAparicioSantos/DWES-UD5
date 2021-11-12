<?php
$servidor = "localhost";
$baseDatos = "Tema5";
$user = "developer";
$pass = "developer";


function insertaElemento($NombreUsuario, $Contraseña, $CuentaBancaria)
{

    try {
        $conexion = new PDO('mysql:host=' . $GLOBALS["servidor"] . ';dbname=' . $GLOBALS["baseDatos"], $GLOBALS["user"], $GLOBALS["pass"]);


        $consulta = $conexion->prepare("INSERT INTO banco (NombreUsuario, Contraseña, CuentaBancaria) VALUES (?,?,?)");
        $consulta->bindParam(1, $NombreUsuario);
        $consulta->bindParam(2, $Contraseña);
        $consulta->bindParam(3, $CuentaBancaria);
        $consulta->execute();
        $last_id = $conexion -> lastInsertId();
        return $last_id;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    $conexion = null;
}

insertaElemento("1","2","3");
?>