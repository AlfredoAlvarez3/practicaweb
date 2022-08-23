<?php

include('basededatos.php');

//recibir por el metodo post,crear variables de recibimiento
$id=$_GET['cod_estudiante'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$nombreproducto=$_GET['nombre_prod'];

//crear consulta para insertar los datos
$consulta="INSERT INTO `cliente` VALUES ($id, '$nombre', '$apellido', '$nombreproducto');";
//crear variable resultado,esta variable va almacenar todo lo que hicimos
if (mysqli_query($conexion, $consulta)) {
  
    header("Location: index.php");
  } else {
    echo "Error al registrar un producto: " . mysqli_error($conexion);
  }
  
  mysqli_close($conexion);

  
?>