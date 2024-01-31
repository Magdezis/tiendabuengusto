<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="container-md">
    <div class="text-center">
        <h1>Registro de Usuarios</h1>
    </div>
    <div class="container-md text-center">
        <form action="/tiendabuengusto/model/insertar.model.php" method="POST">
            <div class="input-group mb-3 mw-100 text-center" style="width: 35%;">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3 mw-100 text-center" style="width: 35%;">
                <span class="input-group-text" id="basic-addon1">Apellido</span>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3 mw-100 text-center" style="width: 17%;">
                <span class="input-group-text" id="basic-addon1">Edad</span>
                <input type="text" name="edad" class="form-control" placeholder="edad" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3 mw-100 text-center" style="width: 35%;">
                <span class="input-group-text" id="basic-addon1">Direccion</span>
                <input type="text" name="direccion" class="form-control" placeholder="Direccion" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3 mw-100 text-center" style="width: 35%;">
                <span class="input-group-text" id="basic-addon1">Telefono</span>
                <input type="text" name="telefono" class="form-control" placeholder="Telefono" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div>
                <select name="sexo" class="form-select form-select-sm mw-100 text-center" style="width: 13%;" aria-label="Small select example" required>
                    <option  value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                </select>
            </div>
            <div class="container-sm" style="width: 15%;">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
    <div class="container-sm">
    <a class="btn btn-primary mw-100 text-center" style="width: 17%;" href="/tiendabuengusto/model/mostrar.model.php" role="button">Mostrar registros</a>
    </div>
   
</body>

</html>