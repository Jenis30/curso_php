<!-- funciones son instruciones que se utilizan varias veces  es un bloque de codigo que se ejecuta las veces necesarias -->

<?php
// se le pasan argumentos a la funcion
function imprimirlistaProducto($producto, $fechaEntrada){
    // instruciion o rutina que se desea hacer
    echo "lista".$producto." ".$fechaEntrada."<br/>";
}

//llamar a la funcion para que se cumpla la instruccion
imprimirListaProducto("Cremas" , "");//las comillas quieren decir argumento vacio
imprimirListaProducto("Champo" , "07/03/2023");
imprimirListaProducto("Desodorantes" , "19/12/2020");
imprimirListaProducto("Crema de peinar" , "10/10/2020");
imprimirListaProducto("Esmalte de uñas" , "12/11/2020");

?>