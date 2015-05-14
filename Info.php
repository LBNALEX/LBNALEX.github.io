<?php

if (empty($_POST["nom"]) or empty($_POST["edad"]) or (empty($_POST["correo"]))) {
	echo "Favor de llenar los campos de nombre, edad y correo";
}
else{
	echo "<h1>Informacion</h1><hr>";
	echo "<p><b>Nombre:</b> ".$_POST["nom"]."</p>";
	echo "<p><b>Edad:</b> ".$_POST["edad"]."</p>";
	echo "<p><b>Correo Electronico:</b> ".$_POST["correo"]."</p>";
}
if (isset($_POST["sexo"])) {
	echo "<hr><p><b>Sexo: </b>".$_POST["sexo"]."</p>";
}
if (isset($_POST["fav"])) {
	echo "<hr><p><b>Municipio Favorito:</b> ".$_POST["fav"]."</p>";
}

if (isset($_POST["dislike"])) {
	echo "<hr><p><b>Municipio que menos gusta:</b> ".$_POST["dislike"]."</p>";
	}

if (isset($_POST["comida"])) {
	echo "<hr><b>Platillos Favoritos:</b> <br>";
	$comida=$_POST["comida"];
	$tam=count($comida);
	for ($i=0; $i <$tam ; $i++) { 
		echo "-".$comida[$i]."<br>";
	}
}

if (isset($_POST["comentarios"])) {
	echo "<hr><b>Comentarios:</b> <br>";
	echo $_POST["comentarios"];
}
?>