<?php

    echo"<h1>Recibiendo informacion del formulario de registro</h1>";
    $id = $_GET['id'];
    $tipo = $_GET['tipo_h'];
    $precio = $_GET['precio_h'];
    $cantidad = $_GET['cantidad_h'];
?>

<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body >

  <section style ="padding: 20px;">
    
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

</body>

</html>
