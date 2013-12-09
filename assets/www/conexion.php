<?php
/*
CLASE PARA LA CONEXION Y LA GESTION DE LA BASE DE DATOS Y LA PAGINA WEB
*/
class database {
 static private $instance = null;
 private function __construct() {
     $this->conectar();  
 }
 private function __clone() { }
 public static function getInstance(){
     if(self::$instance == null){
         self::$instance = new database();
     }
     return self::$instance;
 }
 
 private $conexion;

    /* METODO PARA CONECTAR CON LA BASE DE DATOS*/
 public function conectar()
 {
  if(!isset($this->conexion))
  {
    $this->conexion = mysql_connect("localhost","bithuman_dakar","dakar2013;")or die (mysql_error());
    mysql_select_db("bithuman_dakar",$this->conexion);
  }
 } 


 public function ejecutar($query)
 {
    $resultado = mysql_query($query,$this->conexion) or die (mysql_error());
    return $resultado;
 }
 public function  array_mysql($query){
    if(!is_resource($query)) return false;
 
     return mysql_fetch_row($query);
 }
 /*Método para obtener una fila de resultados de la sentencia sql*/
 public function obtener_filas($query){
  if(!is_resource($query)) return false;  
  return mysql_fetch_row($query); 
  
 }
 public function  obt_array($resultado){ 
     $data = null;
     if(!is_resource($resultado)){
          return false;
      }else{
          
          while($tsArray = mysql_fetch_assoc($resultado)) {                      
                $data[] = $tsArray;    
           }            
                return $data;
      }   
     
 }


}
?>

