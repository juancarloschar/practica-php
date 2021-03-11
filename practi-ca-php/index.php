<?php 
    include "./conexion/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seleccionar PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <a type="button" class="btn btn-primary" href="./new.php">Agregar</a>
            <table class="table table-striped" width="100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre completo</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Correo Electrónico</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM personas";
                        $resultado = mysqli_query($conexion, $query);
						//echo var_dump($resultado).'<br>';
                        $count = 0;
                        while($data = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
						//echo var_dump($data).'<br>';
                            echo '
                                <tr>
                                    <th scope="row">'.++$count.'</th>
                                    <td>'.$data['nombre'].' '.$data['ap'].' '.$data['am'].'</td>
                                    <td>'.$data['fn'].'</td>
                                    <td>'.$data['genero'].'</td>
                                    <td>'.$data['telefono'].'</td>
                                    <td>'.$data['email'].'</td>
                                    <td>
										<a type="button" class="btn btn-warning text-white"  href="./details.php?id_persona='.$data['id'].'">Editar</a>
									</td>
                                    <td>
										<a type="button" class="btn btn-danger" href="./crud/remove.php?id_persona='.$data['id'].'">Eliminar</a>
									</td>
                                </tr>
                            ';
                        }//end while
                        mysqli_close($conexion);
                    ?>
                    
                </tbody>
            </table>
        </div>
    </body>
</html>