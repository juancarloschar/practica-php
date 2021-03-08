<?php
    include "./../conexion/conexion.php";

    $id_persona = $_GET['id_persona'];

    $query = "DELETE FROM personas WHERE id = $id_persona";

    mysqli_query($conexion, $query) or die (mysqli_error($conexion));
    
    header("Location: ./../index.php");
    mysqli_close($conexion);

?>