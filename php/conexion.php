<?php

$servidor="localhost";
$usuario="root";
$password="";
$base="integradora";

//crear una variable para la conexion
$conn=mysqli_connect($servidor,$usuario,$password,$base);

//probar la conexion
if(!$conn)
{
    die("error al realizar la conexion".mysqli_connect_error());

}

echo "conexion realizada correctamente";


?>