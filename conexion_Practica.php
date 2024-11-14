<?php
$ser= "localhost";
$usu= "root";
$pass= "";
$bd= "ejemplo";

$conex = new mysqli($ser,$usu,$pass,$bd);

if($conex -> connect_error){
	echo "no se pudo";
}else{
	echo "si se pudo";
}  

$nombre= $_POST['NOM'];
$apellido= $_POST['APE'];
$grupo= $_POST['GR'];

$enviar="INSERT INTO examen(nombre,apellido,grupo) VALUES('$nombre','$apellido','$grupo')";
if($conex-> query($enviar)===TRUE){
	echo "registro exitoso";
}else{
	echo "No se pudo";
}
?>