<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    include "ejercicio6BBDD.php";

    $usuario = "";
    $contraseña = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        $contraseñaEncriptada = password_hash($contraseña, PASSWORD_DEFAULT);

        getUser($usuario);

        if(password_verify($contraseña,$contraseñaEncriptada)){

            echo "la contraseña es correcta";
        }else{

            echo "la contraseña es incorrecta.";
        }
    }



    ?>


    <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <h2>Banco2</h2>
        <div>
            <input type="text" name="usuario" placeholder="NombreUsuario" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <input type="submit" value="Registrar">
        </div>
    </form>

</body>

</html>