<?php 
include "conexion.php";

mysqli_Select_db($conexion, "dreams3");

$fabricanteborrar = $_GET["id"];
$borrar="DELETE FROM fabricantes WHERE id_fabricante = '$fabricanteborrar'";
mysqli_Query($conexion, $borrar);
header("Location: baja_ok.php");
?>