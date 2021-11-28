<?php
    session_start();

    if (empty($_SESSION["perfil"])) {
        header("Location: ejercicio7.php");    
    }else if ($_SESSION["perfil"]=="usuario") {
        header("Location: usuario.php");    
    }else if ($_SESSION["perfil"]=="admin") {
        echo "eres el jefe supremo";
        echo "<a href='cierraSesion.php'>Cerrar sesion</a>";
    }else{
        header("Location: ejercicio7.php");    
    }
?>