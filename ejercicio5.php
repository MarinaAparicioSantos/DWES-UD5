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
    include "ejercicio5BBDD.php";

    $usuario = "";
    $contrasenya = "";
    $cuenta = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contrasenya = $_POST["contrasenya"];
        $contrasenya = password_hash($contrasenya, PASSWORD_DEFAULT);
        $cuenta = $_POST["cuenta"];

        insertaElemento($usuario, $contrasenya, $cuenta,"usuario");
    }

    ?>

    <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <h2>Banco</h2>
        <div>
            <input type="text" name="usuario" placeholder="NombreUsuario" required>
            <input type="password" name="contrasenya" placeholder="Contraseña" required>
            <input type="text" name="cuenta" placeholder="CuentaBancaria" required>
            <input type="submit" value="Registrar">
        </div>
    </form>

</body>
</html>