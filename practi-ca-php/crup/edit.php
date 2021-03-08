<?php
    include "./../conexion/conexion.php";

    $id_persona = $_POST['id_persona'];
    
    $nombre = $_POST['nombre'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $fn = $_POST['fn'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $opcion = $_POST['opcion'];

    $query = "UPDATE personas SET nombre='$nombre', ap='$ap', am='$am', fn='$fn', genero='$genero', email='$email', telefono=$telefono, que_prefieres=$opcion WHERE id = $id_persona";

    mysqli_query($conexion, $query) or die (mysqli_error($conexion));

    if (array_key_exists ('color', $_POST)) {
        // Arreglo de colores
        $colores = $_POST['color'];

        $query2 = "DELETE FROM colores WHERE id_persona = $id_persona";
        mysqli_query($conexion, $query2) or die (mysqli_error($conexion));
        for ($i=0; $i < sizeof($colores); $i++) { 
            $query3 = "INSERT INTO colores (color, id_persona) VALUES ('$colores[$i]', $id_persona)";
            mysqli_query($conexion, $query3) or die (mysqli_error($conexion));
        }//end for i
    }//end if
    else {
        $query2 = "DELETE FROM colores WHERE id_persona = $id_persona";
        mysqli_query($conexion, $query2) or die (mysqli_error($conexion));
    }//end else
    header("Location: ./../details.php?id_persona=$id_persona");
    mysqli_close($conexion);

?>