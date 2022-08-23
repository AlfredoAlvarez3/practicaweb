<?php
//llamar a la conexion de la base de datos
include("basededatos.php");
$id=$_GET['id'];
$consulta="DELETE FROM `cliente` WHERE  `id`=$id";

//recibir por GET o código o ID


if (mysqli_query($conexion,$consulta)) {
    
    //regresar a la pagina principal
    header("Location: mostrar.php   ");//nos indica que va regresar a la ventana mostrar.php

  } else {
    echo "Error al tratar de eliminar un nombre: " . mysqli_error($conexion);
  }
  
  mysqli_close($conexion);



?>