<?php

    $user = "root";
    $pass = "";
    $server = "localhost";
    $base = "by_system_hotel";

    $con = "mysql:host=$server;dbname=$base;";

    if(!$con)
    {
        echo "Error al realizar la conexion".mysqli_connect_error();
    }

    echo "se realizo correctamente la conexion<br>";

    $miPDO = new PDO($con,$user,$pass);


   $id = $_POST["id"];
   $tipo = $_POST["tipo"];
   $cantidad = $_POST["cantidad"];
   /*$servicio = $_POST["servicio"];*/
   $descripcion = "xd";
   $precio = $_POST["precio"];



   $consulta = $miPDO->prepare("INSERT INTO habitaciones(`id_habitacion`,`tipo`,`precio`,`cantidad`,`descripcion`) values ('$id','$tipo','$precio','$cantidad','$descripcion');");
   $miConsulta = $miPDO->prepare('SELECT * FROM habitaciones;');
   $consulta ->execute();
   $miConsulta->execute();
   //header("Location:habitaciones.php");
?>

<table class="table" style="background:white; color:black;  border-color:#8F3A84;">
    <thead style ="background:#35b3a7;">
      <th scope ="col">Id</th>
      <th scope ="col">tipo</th>
      <th scope ="col">Descripcion</th>
      <th scope ="col">precio</th>
      <th scope ="col">cantidad disponible</th>
      <th scope ="col">Servicios</th>
      <th scope ="col"></th>
      <th sope ="col"></th>
    </thead>

    <tbody>
    <?php foreach ($miConsulta as $clave => $valor): ?> 
    <tr>
       <th scope ="row"><?= $valor['id_habitacion']; ?></th>
       <td><?= $valor['tipo']; ?></td>
       <td><?= $valor['descripcion']; ?></td>
       <td><?= $valor['precio']; ?></td>
       <td><?= $valor['cantidad']; ?></td>
       
       <td><button>Eliminar</button></td>
       <td><button>Modificar</button></td>
    </tr>
    <?php endforeach; ?>
    </tbody> 
  </table>


