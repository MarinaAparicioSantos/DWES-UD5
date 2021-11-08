<?php

$name = "Marina";
$age = 21;
//$datos = $name . " tiene " . $age . " años.";

$caducidad = time() + 10800;
setcookie("nombre", $name, $caducidad, "/");
setcookie("edad", $age, $caducidad, "/");
?>
