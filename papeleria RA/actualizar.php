
<?php

//recibir las variables del formulario y actualizar

// a actualizar los datos";
$id=$_POST["id"];
$nombre=$_POST["nombre1"];
$apellido=$_POST["apellido"];
$nombreproducto=$_POST["nombre_producto"];

//llamar al archivo conexión
include("basededatos.php");

$sql = "UPDATE `cliente` SET nombre ='$nombre', `apellido`='$apellido', `producto`='$nombreproducto' WHERE  `id`=$id";

echo "consulta: ".$sql;
if (mysqli_query($conexion, $sql)) {
  
  header("Location: mostrar.php");
} else {
  echo "Error al modificar un campo: " . mysqli_error($conexion);
}

mysqli_close($conexion);



?>