<?php

include "conexion.php";
$id=$_POST['id'];

$sql="DELETE  FROM servicios where IdServicios=$id";
$resp=mysqli_query($conexion,$sql);


if($resp){
echo "El registro fue eliminado correctamente"; 
}else{
echo "Ocurrio un error al eliminar un registro:".mysqli_error();
}
mysqli_close($conexion);
?>