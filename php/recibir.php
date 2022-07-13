<?php

    echo"<h1>Recibiendo informacion del formulario de registro</h1>";

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
      <th scope ="col">Tipo</th>
       <th scope ="col">Servicios</th>
      <th scope ="col">Precio</th>
      <th scope ="col">Descripcion</th>
      <th sope ="col"></th>
    </thead>
    <tbody>
      <tr>
        <td><?=$tipo?></td>
        <td><?=$cantidad?></td>
        <td><?=$precio?></td>

        <td><button style="background:red; color:white;">Eliminar</button> <button style ="background:green; color:black;">Modificar</button></td>
      </tr>
  
  </section>

</body>

</html>
