<?php
    include "./../conexion/conexion.php";

    $nombre = $_POST['nombre'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $fn = $_POST['fn'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $opcion = $_POST['opcion'];

    $query = "INSERT INTO personas (nombre, ap, am, fn, genero, email, telefono, que_prefieres) VALUES ('$nombre', '$ap', '$am', '$fn', '$genero', '$email', '$telefono', '$opcion')";
	
	//$query = "INSERT INTO personas (nombre, ap, am, fn, genero, email, telefono, que_prefieres) VALUES ('".$nombre."', '".$ap."', '".$am."', '".$fn."', '".$genero."', '".$email."', ".$telefono.", ".$opcion.")";

    mysqli_query($conexion, $query) or die (mysqli_error($conexion));

    $ultimo_id = mysqli_insert_id($conexion);

    if (array_key_exists ('empresa', $_POST)) {
        // Arreglo de colores
        $colores = $_POST['empresa'];
        for ($i=0; $i < sizeof($colores); $i++) { 
            $query2 = "INSERT INTO empresas (empresa, id_persona) VALUES ('$empresas[$i]', $ultimo_id)";
			//$query2 = "INSERT INTO colores (color, id_persona) VALUES ('".$colores[$i]."', ".$ultimo_id.")";
            mysqli_query($conexion, $query2) or die (mysqli_error($conexion));
        }//end for i
    }//end if
	mysqli_close($conexion);
    header("Location: ./../index.php");
?>