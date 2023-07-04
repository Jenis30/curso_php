<?php
if($_POST){

    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];
    
     //suma
    $suma = $valorA + $valorB;

    // resta
    $resta = $valorA - $valorB;

    // multiplicacion
    $multiplicacion = $valorA * $valorB;

    // division
    $division = $valorA / $valorB;

    echo "<br/>".$suma;
    echo "<br/>".$resta;
    echo "<br/>".$multiplicacion;
    echo "<br/>".$division;
    
 if ($valorA==$valorB){
    echo"el valor de A es igual al de B ";

    if ($valorA == 4){
        echo "el valor es 4";
    }
         if ($valorA == 5){

            echo"el valor es 5 ";

    }
 
 } 

if(($valorA == $valorB)&&($valorA == 4)){
    echo "el valor de a es igual al valor de b y es un numero 4";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="ejercicio10.php" method="post">
valor A:
<input type="text" name="valorA" id="">
<br/>
valor B:
<input type="text" name="valorB" id="">

<input type="submit" value="calcular">

</form>



</body>
</html>