<?php
/*$servidor="localhost";
$usuario="root";
$pwd="alex";
$BD="servcios_libres";*/

$servidor="mysql.hostinger.mx";
$usuario="u440664547_bd";
$pwd="Guadalupe27";
$BD="u440664547_user";

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());
?>
