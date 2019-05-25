<?php
	$db_host="localhost";
	$db_nombre="proyeccion_pelicula";
	$db_usuario="root";
	$db_contra="";
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion,"utf8");
	
	
	
	
$id=$_GET['text'];
$nombre=$_GET['text2'];
$organizador=$_GET['text3'];

echo "El texto es: ".$id."<br>";
echo "El texto es: ".$nombre."<br>";
echo "El texto es: ".$organizador."<br>";


$consulta="INSERT INTO `proyeccion_pelicula`.`certamen` (`NombreCertamen`, `Organizador`) VALUES ('5', '5')";
	
$resultados=mysqli_query($conexion,$consulta);
mysqli_close($conexion);
?>

<!--Insertar base de datos-->
<?php
	
	


?>