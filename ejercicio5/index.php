<?php

/*
Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros:
$num=rand(1,100);
En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100.
Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o 
si es mayor.

Para imprimir el contenido de una variable también utilizamos el comando echo:
echo $num;
 */
    function aleatorio(){
        $num=rand(1,100);
        
        if($num < 50){
            echo "El número menor a 50";
        }elseif($num == 50){
            echo "El número igual a 50";
        }elseif($num > 50){
            echo "El número es mayor a 50";
        }
        echo "<br>";
        echo "El numero aleatorio es: $num";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1><center> EJERCICIO 5</center> </h1>
    <h2>Número aleatorio</h2>
    <?php aleatorio() ?>

</body>
</html>