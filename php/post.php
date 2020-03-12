<?php

echo "<h1>Usted ha ingresado estos datos</h1>";
$nombre=$_POST["user"];
$password=$_POST["contraseña"];
$correo=$_POST["correo"];
$sexo=$_POST["sexo"];
$poke=$_POST["poke"];
$pokeparada=$_POST["pokeparada"];
$comentario=$_POST["comentario"];

echo "Nombre de usuario: ".$nombre . "<br/>";
echo "Contraseña: ".$password . "<br/>";
echo "Correo: ".$correo . "<br/>";
echo "Genero: ".$sexo . "<br/>";
echo "Pokemon preferido: ".$poke . "<br/>";
echo "Sú pokeparada: ".$pokeparada . "<br/>";
echo "Comentarios del formulario: ".$comentario . "<br/>" . "<br/>";


echo"<h2> Gracias por visitar</h2>";
?>
