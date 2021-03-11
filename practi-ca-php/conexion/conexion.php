<?php 
    // Variables para configuración a la base de datos
    $servidor = "localhost";
    $basededatos = "conexion";
    $usuario = "root";
    $password = "";

    // Se crea la conexión
    $conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);

    // Se verifica la conexión
    if (!$conexion) {
        die("Error de conexion: " . mysqli_connect_error());
        exit();
    }//end if
	
	mysqli_query($conexion, "SET NAMES 'utf8'");
?>