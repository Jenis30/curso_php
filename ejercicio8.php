<?php
if($_POST){

    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];

    // operadores conpartivos

   if ($valorA > $valorB){ // mayor
    ($valorA < $valorB)//menor
    ($valorA >= $valorB) // mayor o igual
   ($valorA <= $valorB)  //menor o igual
    ($valorA != $valorB) //diferente

    echo "el valor de A es mayor que el valor de B";

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
    

<form action="ejercicio8.php" method="post">
valor A:
<input type="text" name="valorA" id="">
<br/>
valor B:
<input type="text" name="valorB" id="">

<input type="submit" value="calcular">

</form>



</body>
</html>