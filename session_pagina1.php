<?php

session_start();

$_SESSION["nombre"] = "Marina Aparicio Santos.";
$_SESSION["edad"] = 21;

print "<p>El nombre es $_SESSION[nombre] con edad $_SESSION[edad].</p>";


?>