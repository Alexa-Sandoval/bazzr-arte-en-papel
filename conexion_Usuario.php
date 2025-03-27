<?php
$ser= "localhost";
$usu= "root";
$pass= "";
$bd= "bazzr";

$conex = new mysqli($ser,$usu,$pass,$bd);

if($conex -> connect_error){
	echo "no se pudo";
}else{
	echo "si se pudo ";
}  

$nombre= $_POST['nom'];
$correo= $_POST['Corr_Ele'];
$pass= $_POST['pass'];

$enviar="INSERT INTO usuario(nombre,correo,pass) VALUES('$nombre','$correo','$pass')";
if($conex-> query($enviar)===TRUE){
	echo "registro exitoso ";
}else{
	echo " No se pudo";
}
?>