<?php
$ser = "localhost";  // Servidor de la base de datos
$usu = "root";       // Usuario
$pass = "";          // Contraseña
$bd = "bazzr";       // Nombre de la base de datos

// Conectar a la base de datos
$conex = new mysqli($ser, $usu, $pass, $bd);

// Verificar conexión
if ($conex->connect_error) {
    die("Conexión fallida: " . $conex->connect_error);
}

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nom'];
    $correo = $_POST['Corr_Ele'];
    $password = $_POST['pass'];

    // Validar que los campos no estén vacíos
    if (!empty($nombre) && !empty($correo) && !empty($password)) {
        // Sentencia preparada para evitar inyección SQL
        $stmt = $conex->prepare("INSERT INTO usuario (nombre, correo, pass) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $correo, $password);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Registro exitoso.";
        } else {
            echo "Error en el registro: " . $stmt->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

// Cerrar la conexión
$conex->close();
?>
