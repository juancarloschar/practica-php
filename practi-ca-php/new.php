<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro en PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="./crud/add.php" method="POST">
                <div class="row">
                    <div class="form-group col-4">
                        <label>Nombre(s)</label>
                        <input type="text" name="nombre" placeholder="Nombre(s)" required class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label>Apellido Paterno</label>
                        <input type="text" name="ap" placeholder="Apellido Paterno" required class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label>Apellido Materno</label>
                        <input type="text" name="am" placeholder="Apellido Materno" required class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label>Fecha de nacimiento</label>
                        <input type="date" name="fn" required class="form-control">
                    </div>
                    <div class="form-group col-4">
                        <label>Genero</label>
                        <select name="genero" class="form-control" required>
                            <option value="">Seleccionar genero</option>
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <label>Correo electrónico</label>
                        <input type="email" required class="form-control" name="email" placeholder="ejemplo@mail.com">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-4">
                        <label>Número de teléfono</label>
                        <input type="number" required class="form-control" name="telefono" placeholder="xxxxxxxxxx">
                    </div>
                </div>

				<h5>¿Que prefieres?</h5>
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="opcion" value="1">
                    <label>Realidad virtual</label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input position-static" type="radio" name="opcion" value="2">
                    <label>Realidad aumentada</label>
                </div>

                <h5>Elige las empresas que conoces que trabajan con la realidad aumentada</h5>
                <div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa1" type="checkbox" value="empresa1">
                    <label for="empresa1">IKEA</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa2" type="checkbox" value="empresa2">
                    <label for="empresa2">LACOSTE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa3" type="checkbox" value="empresa3">
                    <label for="empresa3">TESCO</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa4" type="checkbox" value="empresa4">
                    <label for="empresa4">BIC KIDS</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa5" type="checkbox" value="empresa5">
                    <label for="empresa5">THE NEW YORK TIMES</label>
                </div>
				<div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa6" type="checkbox" value="empresa6">
                    <label for="empresa6">TEQUILA PATRÓN</label>
                </div>  
				<div class="form-check">
                    <input class="form-check-input position-static" name="empresa[]" id="empresa7" type="checkbox" value="empresa7">
                    <label for="empresa7">CONVERSE</label>
                </div> 
				
                <button type="submit" class="btn btn-primary btn-block">Agregar</button>

            </form>
        </div>
    </body>
</html>