<?php 
	/* Desarrollado por: PROGRAMANDO BROTHERS 	
	Suscribete a : https://www.youtube.com/ProgramandoBrothers y comparte los vídeos.
	Recuerda: "EL CONOCIMIENTO SE COMPARTE, POR MÁS POCO QUE SEA".
	*/
	include_once('conexion.php');
	
	$nombre = $_POST['nombre'];
	$ape_paterno = $_POST['ape_paterno'];
	$ape_materno = $_POST['ape_materno'];
	$edad = $_POST['edad'];
	$dni = $_POST['dni'];
	$direccion = $_POST['direccion'];

	$sql = "INSERT INTO cliente (nombre, ape_paterno, ape_materno, edad, direccion, dni, estado) 
				VALUES ('$nombre', '$ape_paterno', '$ape_materno', $edad, '$direccion', '$dni', 1);";
	$res = mysqli_query($conn,$sql);
	if ( isset( $res ) )
		echo "correcto";
	else
		echo "error";	

?>
