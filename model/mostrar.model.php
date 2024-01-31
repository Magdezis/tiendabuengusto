<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="/tiendabuengusto/model/alert.model.js"></script>
</head>

<body>
    <div class="text-center">
        <h1>Registro de Clientes</h1>
    </div>
    <div class="container-md">
        <table class="table table-responsive">
            <tr class="table-dark">
                <!--Los encabezados que aparecen sobre la informacion que se obtiene de la
            la base de datos -->
                <th class="mw-100 text-center" style="width: 1%;">ID</th>
                <th class="mw-100 text-center" style="width: 17%;">Nombre</th>
                <th class="mw-100 text-center" style="width: 10%;">Apellido</th>
                <th class="mw-100 text-center" style="width: 10%;">Edad</th>
                <th class="mw-100 text-center" style="width: 25%;">Dirección</th>
                <th class="mw-100 text-center" style="width: 15%;">telefono</th>
                <th class="mw-100 text-center" style="width: 15px;">Sexo</th>
                <th class="mw-100  text-center" style="width: 10%;">Eliminar</th>
                <th class="mw-100 text-center" style="width: 10%;">Editar</th>
            </tr>
            <?php
            /** se realiza un include que permite obtener el valor de la funcion mostrar, 
             * mysqli fetch assoc permite recuperar los valores obtenidos de la base dedatos,
             * el while permite repetir la opercion hasta que se halla mostrado el ultimo de dato
             * de la base de datos, mientras se siga obteniendo datos, se seguira obteniendo 
             * imprimiendo en pantalla cada uno de esos datos.
             * 
             */
            include_once("/xampp/htdocs/TiendaBuenGusto/controller/crud.controller.php");
            $resultado = mostrar();
            while ($columna = mysqli_fetch_assoc($resultado)) {
                //  var_dump($columnas);

                /**dentro de cada echo de la forma '', se puede insertar etiquetas de html
                 * las cuales se unen con las etiquetas que se han declarado en el codigo de arriba. 
                 * la variable $id nos sirve para poder obtener el identificador unico de cada registro
                 * lo que nos permite enviarlo atraves de una varible id que se cuentra en el td penultimo y 
                 * ultimo, para poder eliminar o editar un registro especifico
                 */
                $id = $columna['idregistros'];
                echo "<tr>";
                echo '<td class="text-center">' . $columna['idregistros'] . "</td>";
                echo '<td class="text-center">' . $columna['nombre'] . "</td>";
                echo "<td>" . $columna['apellido'] . "</td>";
                echo "<td>" . $columna['edad'] . "</td>";
                echo "<td>" . $columna['direccion'] . "</td>";
                echo '<td class="text-center">' . $columna['telefono'] . "</td>";
                echo "<td>" . $columna['sexo'] . "</td>";              //aca encontramos la variable $id que enviamos traves de get
                echo '<td class="text-center"><a href="/tiendabuengusto/model/eliminar.model.php?id=' . $id . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
            </svg></a></td> ';
                echo '<td class="text-center" style="width: 10%;"><a href="/tiendabuengusto/view/editar.view.php?id=' . $id . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
        </svg></a></td>';
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <div class="container">
        <a href="/tiendabuengusto/view/index.php"><button type="button" class="btn btn-primary">Regresar al inicio</button></a>
    </div>
</body>

</html>