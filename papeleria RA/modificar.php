<!DOCTYPE html>
<html>
    <head>
        <title>
            Modificar producto
          
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body style="background-color:#e6f4fa ;">
       
        <!--aqui debe ir la barra de navegación -->
        <header>
           
           <nav class="navbar navbar-expand-lg navbar-dark bg-info"> <!--lista de navegacion-->
               <div class="container-fluid"> <!--inicio del div principal-->
                   <a class="navbar-brand" href="#">Biblioteca</a>
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

           <!--registro de platillos-->
           <div class="row">
                
                <div class="col-lg-8">
                    <h3 class="text-center text-muted">Actualizar </h3>
                    <!--formulario de registro-->
                    <form method="POST" action="actualizar.php">
                       <!-- aca vamos a recibir las variables por Php--> 
                       <?php

                            $id=$_GET["id"];
                            $nombre=$_GET["nombre"];
                            $apellido=$_GET["apellido"];
                            $nombreproducto=$_GET["producto"];

                       ?>


                       <div class="row mb-3">
                            <label class="col-sm-2">ID</label>
                            <div class="col-sm-10">
                                <input type="text" name="id"  class="form-control" readonly value="<?php echo $id; ?>">
                            </div>
                       </div>
                       
                       <div class="row mb-3">
                            <label class="col-sm-2">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre1" class="form-control" value="<?php echo $nombre; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2">Apellido</label>
                            <div class="col-sm-10">
                                <input type="text" name="apellido" class="form-control" value="<?php echo $apellido; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2">Nombre del producto</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre_producto" class="form-control" value="<?php echo $nombreproducto; ?>">
                            </div>
                        </div>

                        <button class="btn btn-success">Actualizar</button>
                       
                    </form>
                </div>
                <div class="col-lg-4">
                    <img src="utilies.jpg" width="400px" height="300px">
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