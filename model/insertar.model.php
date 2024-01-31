<?php 
/** cada una de las variables recibe la variables de los input que vienen de index.php, los cuales 
 * son pasados por medio de post, almacenados en una varible y enviados a la funcion insertar que se encuentra
 * en nuestro crud.controller.php
 */
include ("/xampp/htdocs/TiendaBuenGusto/controller/crud.controller.php"); 
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];
/**los parametros que recibe la funcion insertar */
insertar($nombre, $apellido, $edad, $direccion, $telefono, $sexo);

?>