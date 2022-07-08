<?php

$b=9;
$c=15;
if ($b>$c){
    echo $b . " es mayor a " . $c;

}else{
    echo $c . " es mayor a " . $b;
}
echo "<hr>";

$p1=14;
$p2=11;
$p3=8;

if ($p1==$p2 && $p1==$p3){ //si todas las variables son iguales agrega ==
    echo "los datos son iguales";
}

else if ($p1<$p2)
{
    if ($p1<$p3){
        echo " el menor es ".$p1;
    }else {
        echo " el menor es ".$p3;
    }


}else {
    if ($p2<$p3){
        echo " el menor es ".$p2;
    }else {
        echo " el menor es ".$p3;
    }
}


?>