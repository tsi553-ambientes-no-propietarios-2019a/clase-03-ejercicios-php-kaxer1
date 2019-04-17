<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */

    function tabla_for(){
        
        echo "<table border=\"3\">";
        
        for($num =0; $num<=20; $num++){
            echo "<tr>";
            echo "<th>";
            $num++;
            $mul = 2*$num;
            echo " 2 * ".$num." = ".$mul." ";

        }
        echo "</table>";
    }

    function tabla_while(){
        echo "<table border=\"3\">";

        $i = 0;
        while($i <= 10){
            echo "<tr>";
            echo "<th>";
            $mul = 2*$i;
            echo " 2 * ".$i." = ".$mul." ";
            $i++;
        }

        echo "</table>";
    }

    function tabla_do_while(){
        echo "<table border=\"3\">";
        $i = 0;
        do{
            echo "<tr>";
            echo "<th>";
            $mul = 2*$i;
            echo " 2 * ".$i." = ".$mul." ";
            $i++;
        }while($i <= 10);

        echo "</table>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Tabla de multiplicar del 2 </h1>
    <br>
    <h2> tabla con For </h2>
    <?php tabla_for() ?>
    
    <br>
    <h2> tabla con while </h2>
    <?php tabla_while() ?>

    <br>
    <h2> tabla con Do while </h2>
    <?php tabla_do_while() ?>

</body>
</html>