<!--Aquí vamos a pegar todo el codigo HTML -->
<!DOCTYPE html>
<html>
    <head>
        <title>
           Papeleria
          
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body style="background-color:#e6f4fa ;">
    <header>
           
           <nav class="navbar navbar-expand-lg navbar-dark bg-info"> <!--lista de navegacion-->
               <div class="container-fluid"> <!--inicio del div principal-->
                   <a class="navbar-brand" href="#">Papeleria</a>
                   
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>

                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                       <ul  class="navbar-nav me-auto mb-2 mb-lg-0">
                           <!--elementos de la lista de navegacion-->
                           <li class="nav-item"><a class="nav-link active" href="index.php">Inicio </a></li>
                           <li class="nav-item"><a class="nav-link" href="mostrar.php">Tablas</a></li>
                           
                       </ul>
                   </div>    
               <div> 

           </nav> 
       </header> 
       
        <section class="container m-5 bg-light">

           <!--registro de alumnos-->
           <div class="row">
                
                <div class="col-lg-8">
                    <h3 class="text-center text-muted">Listado Productos</h3>
                    
                    <!-- busqueda por algun campo -->
                 
                <form  method="GET" action="#" class="m-4" >
                <div class="row">
                    <div class="col-lg-10">
                        <input class="form-control" type="search" name="condicion" placeholder="Titulo del Libro">
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-info">Buscar</button>
                    </div>
                </div>
            </form>

                 
                    <!--tabla con los Libros disponibles-->
                    <table class="table">
                        <tr>
                            <td>id</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Nombre del Producto</td>
                            <td>Opciones</td>
                        </tr>
                       
                        <?php
                            include("basededatos.php");

                            if(isset($_GET["condicion"]))
                            {
                                //busqueda con la condicion
                                $condicion=$_GET["condicion"];
                                $consulta="SELECT * FROM cliente where producto like '%$condicion%' "; 
                            }
                            else
                            {
                                //muestra todos los registros de la tabla
                                $consulta="SELECT * FROM cliente";
                            }
                                                                                                                                 
                            $resultado=mysqli_query($conexion,$consulta);
                            if(mysqli_num_rows($resultado)>0)
                            {
                                while($fila=mysqli_fetch_assoc($resultado))
                                {
                                    echo "<tr>";
                                    echo "<td>".$fila['id']."</td>";
                                    echo "<td>".$fila['nombre']."</td>";
                                    echo "<td>".$fila['apellido']."</td>";
                                    echo "<td>".$fila['producto']."</td>";

                                    
                                    //Admin ....botones de eliminar y modificar
                                    echo "<td> <a class='btn btn-danger' href='eliminar.php?id=".$fila['id']."'>Eliminar</a> </td>";
                                    echo "<td><a class='btn btn-success' href='modificar.php?id=".$fila['id']."&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&producto=".$fila['producto']."'>Modificar</a></td>";
                             
                                }
                            }else
                            {
                                echo "Sin resultados";
                            }

                        ?>

                    </table>
                    
                </div>
                <div class="col-lg-4">
                    <img src="pape.jpg" width="400px">
                </div>
                
            </div>

        </section>
        <footer class="text-muted p-5 bg-light">
            <div class="container">
           
              <p class="text-center">Derechos reservados 2022</p>
            </div>
          </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
</html>



