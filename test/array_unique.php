<?php

Class Empleado{

public $nombre;
public $edad;

public function __construct($nombre,$edad){
    $this->nombre = $nombre;
    $this->edad = $edad;
}


}

$objEmpleado1 = new Empleado("Lucas",23);
$objEmpleado2 = new Empleado("Matias",23);
$objEmpleado3 = new Empleado("Matias",23);
$objEmpleado4 = new Empleado("Matias",23);


$vecObjs =array($objEmpleado1,$objEmpleado2,$objEmpleado3,$objEmpleado4);

print_r(array_unique($vecObjs,SORT_REGULAR)); // en mi tp anda bien sin el 2do parametro porque tengo implementado el __toString como metodo magico sino tiraria error 
//array vlues aplicarle despues


/*
class MyClass {
    public $prop;
}

$foo = new MyClass();
$foo->prop = 'test1';

$bar = $foo;

$bam = new MyClass();
$bam->prop = 'test2';

$test = array($foo, $bar, $bam);

print_r(array_unique($test,SORT_REGULAR));
*/
?>