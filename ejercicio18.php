<?php
// explode se utilisa para las string

// explode comvierte varios string en un arreglo
// strtoupper convierte un string a mayusculas
// strtolower convierte un string a minusculas

$nombre = "jennis yohana guzman martinez";
$nombreMayuscula= strtoupper($nombre);

echo $nombreMayuscula."<br/>";
?>

<?php
//y significa year que es año m mon que es mes d dia

$hoy = date("y / m / d");
echo $hoy;

?>