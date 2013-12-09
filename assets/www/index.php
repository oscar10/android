<?php 
include './consultas.php';
if(isset($_GET['val'])){
    switch ($_GET['val']){
        case 'ruta':
            $tipo = $_GET['tipo'];              
           echo 'jpCallback('.Consultas::estaciones("select * from combustibles where placa='".$tipo."'").')'; 
            break; 
        case 'tipos':
            $tipo = explode(" ",$_GET['tipo']);
            echo 'jpCallback('.Consultas::estaciones("select * from estaciones where gnv = '".$tipo[0]."' and gasolina = '".$tipo[1]."' and diesel = '".$tipo[2]."'").')';                                    
            break;
        default :
          echo 'jpCallback('.Consultas::estaciones("select * from estaciones").')';          
    }
}


?>
