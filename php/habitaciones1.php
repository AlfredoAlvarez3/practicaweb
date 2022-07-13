<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de habitaciones Hotel samaros</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <style>

    body
    {
    background:#E3DAC9;
    color:black;
    }

    #boton1
    {
        background-image: url("https://www.flaticon.es/svg/vstatic/svg/3917/3917034.svg?token=exp=1656644382~hmac=882913a546a3350cb5f55605ccefc207");
    }

    .nav-item
    {
        color: black;
        display: block;
        font-size: 10pt;
        font-family: 'GothamBook';
        padding: 1px 30px;
        text-transform: uppercase;
        letter-spacing: 4px;
        transition: background .5s;
        border-right: 1px solid #000000;
    }
    
    </style>
    </head>

    <body style="background-color:rgb(192, 192, 192);color:white">
    <header>
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <div class="container-fluid">  <!-- Inicio del div contenedor principal-->
                    <a class="navbar-brand" href="#">
                        <img src="icon.jpg" alt="" width="50" height="50" class="d-inline-block align-text-top">
                        Hotel Samaros</a>
                    <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" id ="boton1"><img src="boton.png"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent" > <!-- Contenedor para generar efecto menu -->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id = "navul1">
                            <li class="nav-item"><a class="nav-link active" href="login.html">Salir</a></li>
                            <li class="nav-item"><a class="nav-link" href="reservaciones.html">Reservas</a></li>
                            <li class="nav-item"><a class="nav-link" href="habitaciones.html">Habitaciones</a></li>
                            <li class="nav-item"><a class="nav-link" href="modificaciones.html">Modificar habitacion</a></li>
                            <li class="nav-item"><a class="nav-link" href="modificacion_reservas.html">Modificar Reservaciones</a></li>
                        </ul>
                    </div> <!-- Cierre del div efecto menu -->
                </div> <!-- Cierre del div contenedor principal -->
        </nav>
    </header>



  <form
  style =
  "
  width: 500px;
  padding: 30px;
  margin: auto;
  margin-top: 100px;
  border-radius: 4px;
  font-family: 'calibri';
  color: black;
  background:white;
  box-shadow: 7px 13px 37px #A06D9E;
  "
  method = "GET"
  action="recibir.php">

 <h2 style="text-align: center;">Registro de Habitaciones</h2>
  <div class="form-group">
    <label for="tipo_h">Tipo habitacion:</label>
    <select style="background: white;" name="tipo_h" class="form-control">
        <option selected >Suit</option>
        <option>Doble</option>
        <option>Triple</option>
    </select>
  </div>
  <br>

  <div class="form-group">
    <label for="tipo_h">Precio: </label>
    <input class="form-control" name ="precio_h"></input>
  </div>

  <div class="form-group">
    <label for="tipo_h">Cantidad: </label>
    <input class="form-control" name ="cantidad_h"></input>
  </div>

  
 <br> 


  
 <hr>

  <button style =
  "
  width: 100%;
  background:black;
  border: none;
  padding: 12px;
  color: white;
  margin: 16px 0;
  font-size: 16px;
  " 
  type="submit" class="btn btn-default">Registrar</button>
</form>


</section>

   </body>

</html>