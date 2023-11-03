<?php 

$servidor = "localhost"; // El servidor que utilizamos  
$usuario = "valentin"; // El usuario  
$contraseña = "valentin1"; // La contraseña del usuario 
$BD = "valentin_chatbot"; // El nombre de la base de datos 
 
/* 
Aquí abrimos la conexión en el servidor. El @ que se ponde delante de la funcion, es para que no muestre el error al momento de ejecutarse, ya crearemos un código para eso
*/
 
$conexion = @mysqli_connect($servidor, $usuario, $contraseña); 
 
/* 
Aquí preguntamos si la conexión no pudo realizarse, de ser así lanza un mensaje en la pantalla con el siguiente texto "No pudo conectarse:" y le agrega el error ocurrido con "mysql_error()" 
*/
 
if (!$conexion) { 
    die('<strong>No pudo conectarse:</strong> ' . mysqli_error($conexion)); 
}else{ 
    // Lo siguiente indica que la conexión ha sido realizada 
    echo 'Conectado  satisfactoriamente al servidor <br />'; 
} 
/* 
En esta linea seleccionaremos la BD con la que trabajaremos y le pasaremos como referencia la conexión al servidor. 
*/

mysqli_select_db( $BD, $conexion) or die(mysqli_error($conexion)); 

?>
