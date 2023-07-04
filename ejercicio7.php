<?php
if($_POST){

    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];

    // suma
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
    
    echo "<br/>". " el resultado de la suma es ".$suma." el resultado de la resta es ".$resta." el resultado de la multiplicacion es ".$multiplicacion." el resultado de la division es ".$division;
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
    

<form action="ejercicio7.php" method="post">
valor A:
<input type="text" name="valorA" id="">
<br/>
valor B:
<input type="text" name="valorB" id="">

<input type="submit" value="calcular">

</form>



</body>
</html>