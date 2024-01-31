<?php 
/**la variable que se envia por medio de get en el boton eliminar en el archivo mostrar.model.php 
 * es recibida por medio de get y enviada a la funcion eliminar del crud.controller.php , lo que 
 * permite que la pagina elimine el registro sobre el que se ha hecho click
*/
include ("/xampp/htdocs/TiendaBuenGusto/controller/crud.controller.php");
$id = $_GET['id'];
eliminar($id);
?>