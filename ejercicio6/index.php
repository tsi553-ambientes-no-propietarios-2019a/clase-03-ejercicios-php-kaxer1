<?php
/*

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. 
Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */
    $arr_pal = array(
        'aluviones',
        'laptop',
        'circunsolasen',
        'celular',
        'centrifugadlos',
        'esfero',
        'latigueos',
        'cuaderno',
        'agricultores',
        'aburriremos',
    );

    $aux = count($arr_pal) - 1;
    $arr_cinco_voc[]=array();
/*
---------- FUNCIONES PARA CREAR LA TABLA DE 5 VOCALES
*/

    function vocales(){
        global $aux, $arr_pal;
        echo "<table border=\"3\">";
        echo "<tr>";
        echo "<th>PALABRAS</th>";
        echo "<th>N° LETRAS</th>";
        echo "</tr>";

        for($i=0; $i<=$aux; $i++){
            //echo "<br>";
            $palabra = $arr_pal[$i];  
            separar(strtolower($palabra));
        }
        echo "</table>";

    }

    function separar($plb){
        $arr_separar = preg_split('//', $plb,-1, PREG_SPLIT_NO_EMPTY); //separa la palabra en letras individuales y las agrega en un arreglo.
        $contador = 0;
        
        global $arr_cinco_voc;

        foreach($arr_separar as $value){ //ingresa un solo valor del arreglo
            if( $value == 'a' ||
                $value == 'e' ||
                $value == 'i' ||
                $value == 'o' ||
                $value == 'u' )
                {
                    $contador++;
                    
            }elseif($contador == 5){
                echo "<tr>";
                echo "<td><strong>$plb</strong></td>";
                echo "<td>";
                echo "<center>".count($arr_separar)."</center>";
                echo "</td>";
                echo "</tr>";
                $arr_cinco_voc[]=$plb;
                //print_r($arr_cinco_voc);
                //echo "<br>";
            }
        }
    }

/*
---------- FUNCIONES PARA CREAR LA TABLA DE MENOS DE 5 VOCALES
*/

    function vocales_incompetas(){
        
        global $arr_cinco_voc,$arr_pal,$aux;
        //print_r($arr_cinco_voc);
        //print_r($arr_pal);

        echo "<table border=\"3\">";
        echo "<tr>";
        echo "<th>PALABRAS</th>";
        echo "<th>N° LETRAS</th>";
        echo "</tr>";

        $arr_imprimir = array();

        foreach ($arr_pal as $value1) {
            foreach ($arr_cinco_voc as $value2) {
                if ($value2 == $value1){
                    $arr_imprimir[] = $value1;  
                    break;                  
                }
            }
        }
        $resultado = array_unique($arr_imprimir);
        //print_r($resultado);

        $unir = array_diff($arr_pal,$arr_imprimir); //aqui se almacenan los array con 4 distintas vocales
        //print_r($unir);

        foreach($unir as $palabra){
            separar_letras(strtolower($palabra));
        }
        echo "</table>";
    }

    function separar_letras($plb){
        echo "<tr>";
        echo "<td><strong>$plb</strong></td>";
        echo "<td>";
        echo "<center>".strlen($plb)."</center>";
        echo "</td>";
        echo "</tr>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1><center> EJERCICIO 6</center> </h1>
    <h2>Palabras con 5 vocales</h2>
    <?php vocales() ?>
    <h2>Palabras sin las 5 vocales</h2>
    <?php vocales_incompetas() ?>
    
</body>
</html>