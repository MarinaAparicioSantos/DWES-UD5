<?php
    session_start();

    if (empty($_SESSION["perfil"])) {
        header("Location: ejercicio7.php");    
    }else if ($_SESSION["perfil"]=="admin") {
        echo "<a href='admin.php'.php'>Eres el jefe supremo, ¿no quieres ir a tu pagina?</a>";
        echo "<a href='usuario.php'>Cerrar sesion</a>";    
    }else if ($_SESSION["perfil"]=="usuario"){
        echo "hola pringao";
        echo "<a href='cierraSesion.php'>Cerrar sesion</a>";
    }else{
        header("Location: ejercicio7.php");    
    }
?>