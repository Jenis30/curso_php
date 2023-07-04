<!-- metodo GET nos muestra informacion travez de la URL -->

<?php
if($_GET){
    $nombre = $_GET["Nombre"];
    $apellido = $_GET["Apellido"];

    echo "hola".$nombre;
    echo $apellido;
}

?>



