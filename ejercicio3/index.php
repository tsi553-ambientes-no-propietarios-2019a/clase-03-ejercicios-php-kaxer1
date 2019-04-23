<?php
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. 
 * Acceder a cada componente por su nombre.
 * 
 * Crear un formulario que permita ingresar el nombre de usuario y la contraseña. Al enviar el 
 * formulario se debe validar los datos contra el arreglo para imprimir un mensaje que muestre un 
 * mensaje de error o que permita direccionar a otra página si los datos son correctos.
 */

$registro=array(
            'Pedro'=>'12345',
            'Luis'=>'lolo',
            'Alejandra'=>'esponja',
            'Katness'=>'paleta',
            'Peeta'=>'sinsajo',
            );

    // Leer los datos del formulario
    
    function acceso(){
        $email = $_POST["id_user"];
        echo $email;
        $password = $_POST["id_pass"];
        echo $password;
        foreach($registro as $keys => $valor){
            if($keys == $email && $valor == $password){
                echo "<a href=\"pagina.html\"></a>";
            }else{
                echo "<label class=\"col-sm-2 col-form-label\">Credenciales incorrectas</label>";
                echo "hola:";
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <br>
    <br>

    <h1> <center> INICIAR SESIÓN </center> </h1>
    <br>

    <form action="index.php" method="POST">
    <div class="container">
        <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm-5">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">User</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id_user" id="id_user" placeholder="User">
            </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="id_pass" id="id_pass" placeholder="Password">
            </div>
            </div>
            <center>
                <input type="submit" class="btn btn-primary mb-2" name="ingresar" value="ingresar" onclick="acceso()" />
            </center>
        </div>
        <div class="col-sm">
            
        </div>
        </div>
    </div>


    
    </form>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>