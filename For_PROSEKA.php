<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<audio controls autoplay>
  <source src="Mermaid2021_bgm.ogg" type="audio/ogg">
  <source src="Mermaid2021_bgm.mp3" type="audio/mpeg">
</audio>

	<style>
body {background-image: url(estresa.jpeg) }

.primero {
  font-family: "Helvetica";
  font-size: 25px;
  background-color:  #CECECE;
  text-align: center;  
  padding: 20px;
  width: autopx;
  height: 100px;
  opacity: .5;
  margin-bottom: 10px;
}
.segundo {
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
    border-radius: 12px;
    border: 4px dashed #d9baf6;
    margin-top: 10px;
    margin-right: autopx;
    margin-left: autopx;
    padding: 14px;
    width: 40%;
    height: 930px;
    background-color: #cbf1de;
    margin-bottom: 40px;
        }
 .tercero {
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
    border-radius: 12px;
    border: 4px dashed #fa98a5;
    margin-top: 10px;
    margin-right: autopx;
    margin-left: autopx;
    padding: 14px;
    width: 40%;
    height: 250px;
    background-color: #acf2f5;
    margin-bottom: 40px;
        }    
 .cuarto {
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
    border-radius: 12px;
    border: 4px dashed #fe87d6 ;
    margin-top: 10px;
    margin-right: autopx;
    margin-left: autopx;
    padding: 14px;
    width: 40%;
    height: 470px;
    background-color: #fff8b7;
    margin-bottom: 40px;
        }           

.div3 label{
	font-size: 20px;
	color: #37333b;
}

.div4 label{
	font-size: 20px;
	color: #4b233e;
}

.div6 label{
	font-size: 20px;
	color: #481d23;
}

.div input{
	border: outset #b7a4c8;
	font-size: 22px;
	color: #37333b;
}

.div2 input{
	border: outset #c0818a;
	font-size: 22px;
	color: #373621;
}

.div5 input{
	border: outset #956c87;
	font-size: 22px;
	color: #37333b;
}

</style>
</head>
<body>
	<center>
		<div class = "div"><div class = "primero"><i><h1>Formulario Project SEKAI </h1></div><i>
			<img src="rui.jpg">
		<div class = "div3"><div class = "segundo"><i><h2>Nuevo registro:<i></h2>
	<form action="For_PROSEKA.php" method="post">
		<b><label for="NU">Nombre de usuario:</label><br><br>
		<input type="text" id="NU" name="NU"><br><br><br>

		<b><label for="PF">Cual es tu personaje faborito?:</label><br><br>
		<input type="text" id="PF" name="PF"><br><br><br>

		<b><label for="BF">Banda faborita?:</label><br><br>
		<input type="varchar" id="BF" name="BF"><br><br><br>

		<b><label for="CF">Cancion faborita?:</label><br><br>
		<input type="varchar" id="CF" name="CF"><br><br><br>

		<b><label for="CJ">Cuando comenzastes a jugar?:</label><br><br>
		<input type="date" id="CJ" name="CJ"><br><br><br>

		<b><label for="N">Tu nivel actual?:</label><br><br>
		<input type="number" id="N" name="N"><br><br><br>

		<b><label for="GG">Gemas guardadas?:</label><br><br>
		<input type="number" id="GG" name="GG"><br><br><br>
		<input type="submit" value="enviar" name="enviar"><br><br>
	</div>
	</div>
	</form>

	<div class = "cuarto"><div class = "div4"><h2>Cambiar dato de registro:</h2>
	<form action="For_PROSEKA.php" method="post">
		<center>
		<label for="colu">Columna:</label><br><br>
		<input type="varchar" id="colu" name="colu"><br><br><br>

		<b><label for="nuevo">Dato nuevo:</label><br><br>
		<input type="varchar" id="nuevo" name="nuevo"><br><br><br>

		<b><label for="usu">Nombre del usuario:</label><br><br>
		<input type="text" id="usu" name="usu"><br><br><br>
		<input type="submit" value="enviar" name="colsultar"><br><br>
	</center></div></div></form>

	<div class = "div2"><div class = "div6"><div class = "tercero"><h2>Eliminar registro:</h2>
	<form action="For_PROSEKA.php" method="post">
		<label for="ID">ID:</label><br><br>
		<input type="text" id="ID" name="ID"><br><br><br>
		<input type="submit" name="eliminar">
	</form>
	<h1>Mostrar datos:</h1>
	<form action="For_PROSEKA.php" method="post">
		<input type="submit" name="mostrar">
	</form>
</body>
</html>

<?php
$serv = "localhost";
$usu = "root";
$pass = "";
$db = "proseka";

$conex = new mysqli($serv,$usu,$pass,$db);

if($conex-> connect_error){
	echo "No se ha podido conectar a la base de datos.";
} else {
	echo "conexión exitosa";
}

if(isset($_POST['enviar'])){
	$usuario = $_POST['NU'];
	$personaje = $_POST['PF'];
	$banda = $_POST['BF'];
	$cancion = $_POST['CF'];
	$empiezo = $_POST['CJ'];
	$nivel = $_POST['N'];
	$gemas = $_POST['GG'];

	$envio = "INSERT INTO registro(nom,pers,band,canc,inicio,nivel,gem) VALUES('$usuario','$personaje','$banda','$cancion','$empiezo','$nivel','$gemas')";

	if($conex -> query($envio) === TRUE){
		echo "registro exitoso";
	} else {
		echo 'Hubo un problema en el envio';
	}
}

if(isset($_POST['actualizar'])){
	$columna = $_POST['colu'];
	$dato_nuevo = $_POST['nuevo'];
	$nom = $_POST['nom'];
	$cambio = "UPDATE registro SET $columna = '$dato_nuevo' WHERE nom = '$nom'";

	if($conex -> query($cambio) === TRUE){
		echo "registro exitoso";
	} else {
		echo 'Hubo un problema en el envio';
	}
}
if(isset($_POST['eliminar'])){
	$usuario = $_POST['NU'];
	$eliminacion = "DELETE FROM registro WHERE nom = '$usuario'";
	if($conex -> query($eliminacion) === TRUE){
		echo "Eliminacion exitosa";
	} else {
		echo 'No se ha eliminado el registro';
	}
}
if(isset($_POST['mostrar'])){
$consulta = "SELECT * FROM registro";
$sql = mysqli_query($conex, $consulta);
?>

<html>
<style>
	table, th, td {
	border: 1px solid black;
	}
</style>
<table>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Personaje favorito</th>
    <th>Banda</th>
    <th>Cancion</th>
    <th>Inicio</th>
    <th>Nivel</th>
    <th>Gemas</th>
  </tr>
  <?php while($ver = mysqli_fetch_array($sql)) { ?>
  <tr>
    <td><?php echo $ver['id']; ?></td>
    <td><?php echo $ver['nom']; ?></td>
    <td><?php echo $ver['pers']; ?></td>
    <td><?php echo $ver['band']; ?></td>
    <td><?php echo $ver['canc']; ?></td>
    <td><?php echo $ver['inicio']; ?></td>
    <td><?php echo $ver['nivel']; ?></td>
    <td><?php echo $ver['gem']; ?></td>
  </tr>
<?php } } ?>
</table>
</html>
</body>
</html>