<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container-md text-center">
        <h1>Editar registro</h1>
    </div>
    <div>
        <form action="/tiendabuengusto/model/editar.model.php" method="post">
            <?PHP
            include("/xampp/htdocs/TiendaBuenGusto/controller/crud.controller.php");
            $conexion = conexion();
            $id = $_GET['id'];
            $select = "SELECT * FROM registros  WHERE idregistros=$id";
            $resultado = mysqli_query($conexion, $select);
            if ($resultado) {
                while ($columna = mysqli_fetch_assoc($resultado)) {
        echo '<input hidden type="text" name="id" value="'.$columna['idregistros'].'">';
        echo '<div class="input-group mb-3 mw-100 text-center" style="width: 35%;">
        <span class="input-group-text" id="basic-addon1">Nombre</span>
        <input type="text" name="nombre" class="form-control" value="'.$columna['nombre'].'" aria-label="Username" aria-describedby="basic-addon1" required>
    </div>';
        echo '<div class="input-group mb-3 mw-100 text-center" style="width: 35%;">
        <span class="input-group-text" id="basic-addon1">Apellido</span>
        <input type="text" name="apellido" class="form-control" value="'.$columna['apellido'].'" aria-label="Username" aria-describedby="basic-addon1" required>
    </div>';
        echo '<div class="input-group mb-3 mw-100 text-center" style="width: 17%;">
        <span class="input-group-text" id="basic-addon1">Edad</span>
        <input type="text" name="edad" class="form-control" value="'.$columna['edad'].'" aria-label="Username" aria-describedby="basic-addon1" required>
    </div>';
        echo ' <div class="input-group mb-3 mw-100 text-center" style="width: 50%;">
        <span class="input-group-text" id="basic-addon1">Direccion</span>
        <input type="text" name="direccion" class="form-control" value="'.$columna['direccion'].'" aria-label="Username" aria-describedby="basic-addon1" required>
    </div>';
        echo ' <div class="input-group mb-3 mw-100 text-center" style="width: 35%;">
        <span class="input-group-text" id="basic-addon1">Telefono</span>
        <input type="text" name="telefono" class="form-control" value="'.$columna['telefono'].'" aria-label="Username" aria-describedby="basic-addon1" required>
    </div>';
        echo '<select name="sexo" class="form-select form-select-sm mw-100 text-center" style="width: 13%;" aria-label="Small select example" required>
        <option selected  >'.$columna['sexo'].'</option>
        <option value="femenino">femenino</option>
        <option value="masculino">masculino</option>
      </select>';
        
        
                }
            }
            ?>
             <div class="mw-100 text-center" style="width: 10%;">
                <button type="submit" class="btn btn-primary">Editar Registro</button>
            </div>
        </form>
        <a class="btn btn-primary " href="/tiendabuengusto/model/mostrar.model.php">Regresar al registro</a>
    </div>

</body>

</html>