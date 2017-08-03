
<?php
//funcion que permite conectarnos a la base de datos
function conectarse()
{
$enlace =mysqli_connect("localhost","Kim", "revick93","dbweb");//nombreservidor, usuario,contraseña,nombre base datos
if (!$enlace)
 {

	echo "ERROR: No se pudo conectar a MYSQL".PHP_EOL;
	echo "ERROR de depuracion".mysqli_connect_error().PHP_EOL;
	echo "ERROR de depuracion".mysqli_connect_error().PHP_EOL;
	exit;	

  }
 mysqli_close($enlace);
}
?>