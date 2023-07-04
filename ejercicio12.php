<!-- switch es una sentencia de diferentes casos de una variable 
se nos da una expresion el cual tiene varios casos como por ejemplo que dia de la semana es-->
<?php
 if( $_POST){

    $semana = $_POST["dia"];

    switch ($semana) {
 
    case 1:
        echo "presione dia lunes";
     break;
   

    case 2:
        echo"presione dia martes";
     break;
    

    case 3:
        echo"presione miercoles";
    break;
   

    case 4:
        echo"presione jueves";
    break;
    

     case 5:
        echo"presione viernes";
    break;
    

    case 6:
        echo"presione sabado";
     break;
     

    case 7:
        echo"presione domingo";
        break;

    }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="ejercicio12.php" method="POST">

<input type="submit"name="dia" value="1">
<br/>

<input type="submit" name="dia" value="2">
<br/>

<input type="submit"name="dia" value="3">
<br/>

<input type="submit" name="dia" value="4">
<br/>

<input type="submit" name="dia" value="5">
<br/>

<input type="submit" name="dia" value="6">
<br/>

<input type="submit" name="dia" value="7">


</form>   
</body>
</html>