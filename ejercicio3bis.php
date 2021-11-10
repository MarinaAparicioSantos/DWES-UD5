<?php

    session_start();

    echo "Mi nombre es ",$_SESSION["nombre"]," y mi edad es ",$_SESSION["edad"];

    unset($_SESSION["nombre"]);
    session_unset($_SESSION["nombre"]);
    session_destroy($_SESSION["nombre"]);

?>