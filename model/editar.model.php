<?php  /**los datos que se recibe aca, son pasados desde el archivo editar.view.php , al recibirlos
 * se envian por medio de post a la funcion editar que se encuentra en nuestro archivo crud.controller.php 
 */
include ("/xampp/htdocs/TiendaBuenGusto/controller/crud.controller.php");
$id = $_POST["id"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];
// se envian los parametros por medio de las variables que recibe el metodo editar, que se encuentra en el archivo 
// crud.controller.php 
editar($id,$nombre, $apellido, $edad, $direccion, $telefono, $sexo);
?>