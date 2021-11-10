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
    $contraseña = "";
    $cuenta = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);
        $cuenta = $_POST["cuenta"];

        insertaElemento($usuario, $contraseña, $cuenta);
    }

    ?>

    <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <h2>Banco</h2>
        <div>
            <input type="text" name="usuario" placeholder="NombreUsuario" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <input type="text" name="cuenta" placeholder="CuentaBancaria" required>
            <input type="submit" value="Registrar">
        </div>
    </form>

</body>
</html>