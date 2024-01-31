<?php
/*Utilizamos una funcion conexion que nos permite realizar las conexiones necesarias en cada
funcion*/
function conexion()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "Tiendabuengusto";

    $conexion = mysqli_connect($host, $user, $password, $dbname);
    if ($conexion) {
    } else {
        die("error en la conexion codigo de error:  " . mysqli_connect_error());
    }
    return $conexion;
}
function mostrar()
{ /* seleciona los datos de la base de datos y los ordena de forma ascendete: 1, 2 ,3 ...
    para ordenar de forma descendete escribir DESC
    */
    $conexion = conexion();
    $mostrar = "SELECT * FROM registros ORDER BY idregistros ASC ";
    $resultado = mysqli_query($conexion, $mostrar);
    if ($resultado) {
        //cierro la conexion despues de haber obtenido los valores de la tabla.
        mysqli_close($conexion);
        return $resultado;
    } else {
        die("error en la conexion." . mysqli_connect_error());
    }
}

/**Obtiene el valor de la variable que se ha creado en la mostrar.model.php, y lo recibe en los parametros
 * para eliminar el registro que se ha selecionado
 */
function eliminar($id)
{
    /**primero ejecutamos la consulta eliminar, luego utilizamos ALTER TABLE AUTO_INCREMENT =1, PARA REINICIAR
     * NUESTRO CONTEO EN AUTO INCREMENT EN CASO DE QUE LOS VALORES DE LA TABLA LLEGUEN A CERO, MANTENIENDO LOS 
     * IDENTIFICADOS UNICOS EN CADA TABLA
     * notese que se encuentra en if anidado
     */
  

    $conexion = conexion();
    $eliminar = "DELETE FROM registros WHERE idregistros=$id";
    if (mysqli_query($conexion, $eliminar)) {
        $query = "ALTER TABLE registros AUTO_INCREMENT = 1";
        if (mysqli_query($conexion, $query)) {
            header("location: /tiendabuengusto/model/mostrar.model.php");
        }
    } else {
        echo "error";
    }
}
function insertar($nombre, $apellido, $edad, $direccion, $telefono, $sexo)
{
    $conexion = conexion();
    $insertar = "INSERT INTO registros(nombre, apellido, edad, direccion, telefono, sexo)
    VALUES('$nombre', '$apellido', '$edad', '$direccion', '$telefono', '$sexo')";
    if (mysqli_query($conexion, $insertar)) {
        echo "Registro añadido";
        header("location: /tiendabuengusto/view/index.php");
    } else {
        die("error al añadir registro ." . mysqli_connect_errno());
    }
}

function editar($id, $nombre, $apellido, $edad, $direccion, $telefono, $sexo)
{
    $conexion = conexion();
    $insertar = "UPDATE registros SET nombre='$nombre', apellido='$apellido', edad='$edad', direccion='$direccion',
    telefono='$telefono', sexo='$sexo' where idregistros= $id";
    if (mysqli_query($conexion, $insertar)) {
        echo "Dato actualizado";
        header("location: /tiendabuengusto/model/mostrar.model.php");
    } else {
        die("error al añadir registro ." . mysqli_connect_errno());
    }
}

?>