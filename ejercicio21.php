<!--  La clase "persona" es como una plantilla que define las características y comportamientos de un objeto de tipo persona.
La clase tiene una propiedad pública llamada "nombre", que representa el nombre de la persona.
La clase también tiene un método público llamado "asignarNombre", 
que toma un parámetro llamado "$nuevoNombre" y asigna ese valor a la propiedad "nombre" del objeto actual (usando "$this->nombre").
Luego, se crean dos instancias u objetos de la clase "persona": "$objprofesor" y "$objprofesor2".
 Estos objetos representan a dos personas diferentes.
Se llama al método "asignarNombre" en cada objeto para asignar un nombre diferente a cada uno.
Finalmente, se imprime el valor de la propiedad "nombre" de cada objeto utilizando la sintaxis "$objeto->nombre". 
Esto muestra los nombres asignados a cada persona.

En resumen, el código muestra cómo se define una clase "persona" con una propiedad "nombre" y un método "asignarNombre".
 Luego se crean dos objetos de esa clase y se les asignan nombres diferentes. 
 Luego se muestra por pantalla los nombres asignados a cada objeto.-->

<?php
// las clases son como una plantilla

class persona{
    public $nombre; //propiedades son caracteristicas o atributos de un objeto
    private $edad;
    // protected $altura;
    public function asignarNombre($nuevoNombre){// son acciones o metodos
    //los metodos on accciones que vamos hacer cuando usamos public fun

    $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo"Hola soy".$this->nombre;
    }
    
    public function mostrarEdad(){
        $this->edad=35;
        return $this-> edad;
    }

}

$objprofesor=new persona();//instancia o creacion de un objeto
$objprofesor ->asignarNombre("luis");//se llama un metodo
$objprofesor2= new persona();
$objprofesor2->asignarnombre("matias");
$objprofesor2->imprimirNombre();


echo $objprofesor->nombre;  //imprime la propiedad
echo $objprofesor2->nombre;
echo $objprofesor2->mostrarEdad();
?>

