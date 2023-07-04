<!-- concatenacion y stream -->

<?php

if($_POST){
    /*si haces un envio atravez del metodo POST recepciona esa informacion
    del valor de las variables el cual se optiene del metodo POST */
//"metodo POST" enviar y procesar datos desde un formulario html 
$nombre = $_POST["Nombre"];
$apellido = $_POST["Apellido"];
$identificacion = $_POST["Identificacion"];
$email = $_POST["Email"];
echo "!Hola ".$nombre." ".$apellido." ".$identificacion." ".$email;

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="ejercicio4.php" method="post">
   

    <input type="text" name="Nombre" id="">
    <br/>
    <input type="text" name="Apellido" id="">
    <br/>
    <input type="number" name="Identificacion" id="">
    <br/>
    <input type="email" name="Email" id="">
    <br/>

    <input type="submit" value="enviar">
     
    
    </form>
</body>
</html>


