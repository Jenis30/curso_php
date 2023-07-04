<?php
class empresa{
    public $area;// propiedad
    public $persona;

        public function asignarArea ($nuevaArea) { //metodo
           $this -> area = $nuevaArea ;
        }
  
        public function asignarNombre($nuevoNombre){
            $this -> persona = $nuevoNombre;
        }

    }
$objsecretaria= new empresa();
$objsecretaria -> asignarArea("programacion");
$objsecretaria -> asignarNombre("luis");
$objsecretaria2 = new empresa();
$objsecretaria2 -> asignarArea("cloup");
$objsecretaria2 -> asignarNombre("matias");



echo $objsecretaria -> area."<br/>";
echo $objsecretaria2 -> area;
echo $objsecretaria -> persona."<br/>";
echo $objsecretaria2 ->persona;


?>