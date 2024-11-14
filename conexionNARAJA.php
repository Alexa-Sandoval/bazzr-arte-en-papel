<?php
$servidor="localhost";
$usuario="root";
$contra="";
$basedatos="FORM_naja";

$conexion= new mysqli($servidor,$usuario,$contra,$basedatos);

if($conexion->connect_error){
	echo"Error de conexion";
}

$nom1 =$_POST['nom'];
$GN1 =$_POST['GN'];
$FG1 =$_POST['FG'];

$sql="INSERT INTO fruteria (nom,GN,FG) VALUES('$nom1','$GN1','$FG1')";

if($conexion->query($sql)===TRUE){
	echo"Registro Valido";
}else{
	echo"Hubo un error D:";
}
$conexion->close();
?>
