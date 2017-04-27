<?php

Class Empleado{

public $nombre;
public $edad;

public function __construct($nombre,$edad){
    $this->$nombre = $nombre;
    $this->$edad = $edad;
}

}
/*
instancias de objeto, tipo de clase, valores (son los criterios para comparar objetos)

== convierte al mismo tipo antes de comparar (nota)
== compara objetos solo teniendo en cuenta valores y tipo de clase (no toma en cuenta instancia de objeto) ej : 
$objEmpleado1 = new Empleado("Matias",23); $objEmpleado2 = new Empleado("Matias",23); $objEmpleado1==$objEmpleado2 (TRUE)
$objEmpleado1 = new Empleado("Matias",23); $objEmpleado2 = new Empleado("Felipe",23); $objEmpleado1==$objEmpleado2 (FALSE)

=== compara objetos teniendo en cuenta valores, tipo de clase y instancia 
$objEmpleado1 = new Empleado("Matias",23); $objEmpleado2 = new Empleado("Matias",23); $objEmpleado1===$objEmpleado2 (FALSE)
$objEmpleado1 = new Empleado("Matias",23); $objEmpleado1===$objEmpleado1 (TRUE)
$resultado = 1 === "1";(FALSE)
$resultado = 1 === 2;(FALSE)
$resultado = 1 === 1;(TRUE)

array_search($valor,$array,strict(bool)) sirve para objs pero tener en cuenta el strict si es true utiliza === sino == (por default viene false) 
si es false solo compara que los datos del objeto y y la clase sea = si le pongo true todo lo anterior pero tambien la instancia 
*/

$objEmpleado1 = new Empleado("Lucas",23);
$objEmpleado2 = new Empleado("Matias",23);
$objEmpleado3 = new Empleado("Lucas",23);


$vecObjs=array($objEmpleado2,$objEmpleado3);

$resultado = array_search($objEmpleado1,$vecObjs); // si le pongo true busca tambien la misma instancia si le pongo false solo compara nombre , edad y tipo

echo $resultado;
var_dump($resultado);



/*


function EliminarEmpleado($persona)
    {
        $key=array_search($persona,$this->_empleados);
        if(false !== $key)
        {
             unset($this->_empleados[$key]);
             $reindex=array_values($this->_empleados);
             $this->_empleados=$reindex;
             return true; 
        }
       
    }
    private function EliminarEmpleadosRepetidos()
    {
        
        $this->_empleados=array_values(array_unique($this->_empleados,SORT_REGULAR));
       
    }

    */

?>


