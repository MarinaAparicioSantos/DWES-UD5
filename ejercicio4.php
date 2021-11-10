<?php


$session = [];
$session[] = array("Nombre"=>"session.use_cookies", "definicion"=>"Especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente.","configura" =>"1","posiblesValores"=>"1");
$session[] = array("Nombre"=>"session.use_only_cookies", "definicion"=>"especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. ","configura" =>"1","posiblesValores"=>"1");
$session[] = array("Nombre"=>"session.save_handler", "definicion"=>"define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión. ","configura" =>"files","posiblesValores"=>"files");
$session[] = array("Nombre"=>"session.name", "definicion"=>"Especifica el nombre de la sesión que se usa como nombre de cookie. Sólo debería contener caracteres alfanuméricos.","configura" =>"PHPSESSID","posiblesValores"=>"PHPSESSID");
$session[] = array("Nombre"=>"session.auto_start", "definicion"=>"Especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición.","configura" =>"Off","posiblesValores"=>"Off");
$session[] = array("Nombre"=>"session.cookie_lifetime", "definicion"=>"Especifica el tiempo de vida en segundos de la cookie que es enviada al navegador. El valor 0 significa hasta que el navegador se cierre.","configura" =>"0","posiblesValores"=>"0");
$session[] = array("Nombre"=>"session.gc_maxlifetime", "definicion"=>"especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada. ","configura" =>"1440","posiblesValores"=>"1440");

echo "<table border =\"1\">";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Que hace</th>";
echo "<th>Que configura</th>";
echo "<th>Que posibles valores podria tener</th>";
echo "</tr>";


foreach ($session as &$valor) {

            
    echo "<tr>";

    echo "<td>$valor[Nombre]</td>";
    echo "<td>$valor[definicion]</td>";
    echo "<td>$valor[configura]</td>";
    echo "<td>$valor[posiblesValores]</td>";

    echo "</tr>";
    
}


echo "</table>";

phpinfo();

//que hace, que configura y que posibles valores podria tener

?>