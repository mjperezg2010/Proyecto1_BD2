<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<section>
<form action="probar2.php" name="prueba" id="prueba" method="get">

Email:
<input type="text" name="text"/><br>
<input type="submit" value="Enviar">
</form>
<?php
	if(isset($_POST['prueba'])){
		$nombre=$_POST['text'];
		echo "Que pedos es: ".$nombre."</br>";
		
		
	}

?>

</section>

<body>
</body>
</html>