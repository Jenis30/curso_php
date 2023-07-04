<!-- arreglos con indice no numericos -->

<?php

$ciudad = array("c"=>"cartagena", "B"=>"Bogota", "b"=>"barranquilla");
print_r($ciudad);

echo $ciudad["B"]."<br/>";

foreach($ciudad as $indice=> $valor){
    // echo $ciudad [$indice]."<br/>";
    // echo $valor;
    echo " el valor " .$valor. " tiene el indice " .$indice. "<br/>";

}

?>

