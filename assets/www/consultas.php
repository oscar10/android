<?php
/*
 CLASE 
*/
require_once "./conexion.php";
 

class Consultas{
    
    
    
   public static function estaciones($cons)
    {
       $con = database::getInstance(); 
       $datos =   $con->ejecutar($cons);		
       $val = $con->obt_array($datos);		
       return json_encode($val);
    }
 

}

?>

