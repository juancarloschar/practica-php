<?php 
    include "./conexion/conexion.php";
    // Se obtiene la información de la base de datos con el id que coincida con el id que se manda como parametro get
    $id_persona = $_GET['id_persona'];
    $query = "SELECT *FROM personas WHERE id = $id_persona";
    $row = mysqli_query($conexion, $query) or die (mysqli_error($conexion));
    $persona = mysqli_fetch_array($row);

    // Se obtiene la información de los colores que la persona selecciono y se almacena en un arreglo
    // de la siguiente manera: array('verde', 'rojo', 'azul') esto se realizo a través de la funcioón array_push
    $temp = array();
    $query2 = "SELECT *FROM colores WHERE id_persona = $id_persona";
    $resultado = mysqli_query($conexion, $query2) or die (mysqli_error($conexion));
    while($data = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        array_push($temp, $data['color']);
    }//end while
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalles en PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="./crud/editar.php" method="POST">
                <div class="row">
                    <div class="form-group col-4">
                        <label>Nombre(s)</label>
                        <input type="text" name="nombre" placeholder="Nombre(s)" required class="form-control" value="<?php echo $persona['nombre']; ?>">
                    </div>
                    <div class="form-group col-4">
                        <label>Apellido Paterno</label>
                        <input type="text" name="ap" placeholder="Apellido Paterno" required class="form-control" value="<?php echo $persona['ap']; ?>">
                    </div>
                    <div class="form-group col-4">
                        <label>Apellido Materno</label>
                        <input type="text" name="am" placeholder="Apellido Materno" required class="form-control" value="<?php echo $persona['am']; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label>Fecha de nacimiento</label>
                        <input type="date" name="fn" required class="form-control" value="<?php echo $persona['fn']; ?>">
                    </div> <input type="hidden" name="id_persona" value="<?php echo $id_persona; ?>">
                    <div class="form-group col-4">
                        <label>Genero</label>
                        <select name="genero" class="form-control" required>
                            <option value="">Seleccionar genero</option>
                            <option value="F" <?php echo ($persona['genero'] == 'F' ? 'selected' : ''); ?>>Femenino</option>
                            <option value="M" <?php echo ($persona['genero'] == 'M' ? 'selected' : ''); ?>>Masculino</option>
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <label>Correo electrónico</label>
                        <input type="email" required class="form-control" name="email" placeholder="ejemplo@mail.com" value="<?php echo $persona['email']; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label>Número de teléfono</label>
                        <input type="number" required class="form-control" name="telefono" placeholder="xxxxxxxxxx" value="<?php echo $persona['telefono']; ?>">
                    </div>
                </div>

                <h5>¿Que prefieres?</h5>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="opcion" value="1" <?php echo ($persona['que_prefieres'] == 1 ? 'checked' : ''); ?>>
                    <label>Realidad virtual</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="opcion" value="2" <?php echo ($persona['que_prefieres'] == 2 ? 'checked' : ''); ?>>
                    <label>Realidad aumentada</label>
                </div>

                <h5>Elige las empresas que conoces que trabajan con la realidad aumentada</h5>
                <?php // La función in_array tiene como objetivo verificar si existe en un arreglo el valor que recibe como primer parametro y el segundo es el arreglo que contiene todos los colores
                // que la persona selecciono que anteriormente se creo ?>
                <div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa1" type="checkbox" value="empresa1" <?php echo (in_array('empresa1', $temp) ? 'checked' : ''); ?>>
                    <label for="empresa1">IKEA</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa2" type="checkbox" value="empresa2" <?php echo (in_array('empresa2', $temp) ? 'checked' : ''); ?>>
                    <label for="empresa2">LACOSTE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa3" type="checkbox" value="empresa3" <?php echo (in_array('empresa3', $temp) ? 'checked' : ''); ?>>
                    <label for="empresa3">TESCO</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa4" type="checkbox" value="empresa4" <?php echo (in_array('empresa4', $temp) ? 'checked' : ''); ?>>
                    <label for="empresa4">BIC KIDS</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa5" type="checkbox" value="empresa5" <?php echo (in_array('empresa5', $temp) ? 'checked' : ''); ?>>
                    <label for="empresa5">THE NEW YORK TIMES</label>
                </div>
				<div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa6" type="checkbox" value="empresa6" <?php echo (in_array('empresa6', $temp) ? 'checked' : ''); ?>>
                    <label for="empresa6">TEQUILA PATRÓN</label>
                </div>  
				<div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa7" type="checkbox" value="empresa7" <?php echo (in_array('empresa7', $temp) ? 'checked' : ''); ?>>
                    <label for="empresa7">CONVERSE</label>
                </div>   
                
                <div class="text-right">
                    <a type="submit" class="btn btn-danger" href="./">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>

            </form>
            <?php mysqli_close($conexion); ?>
        </div>
    </body>
</html>