<?php
/**
 * Problema propuesto:
 *
 * Implementar una función que muestre un título centrado en pantalla, y la llamaremos posteriormente dos veces.
*/

    function titulo(){
        echo "<h1> <center>";
        echo "título centrado" ;
        echo "</center> </h1>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EJERCICIO2</title>
</head>
<body>

    <br>
    <?php titulo() ?>
    <?php titulo() ?>

</body>
</html>