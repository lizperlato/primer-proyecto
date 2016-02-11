<?php 

     abstract class Molde{

     	abstract public  function ingresarNombre($nombre);
     	abstract public  function obtenerNombre();
     }

      class persona extends Molde{

      	 private $mensaje = " hola compañeros de imgenieria de sistema";
         private $nombre ;

         public function mostrar(){
         	print $this->mensaje;
         }

         public function ingresarNombre($nombre ,$surname  = " is "){
          	$this->nombre = $nombre . $surname;

          }

          public function obtenerNombre(){
             print $this->nombre;
          }
        
      }

      $obj = new persona();
      $obj ->ingresarNombre("Mariana","Farroñan");
      $obj ->obtenerNombre();
?>


