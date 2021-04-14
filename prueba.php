<?php
include('funciones.php');
$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion,"select * from tiposprograma");
    
   if($resultado->num_rows>0)
      {  
          while ($fila = $resultado->fetch_object()) {
          echo $fila->tiposp_id." ".$fila->tiposp_tipo."<br>";
      }
    }
    else{
    echo "No existen registros";
        }
    $miconexion->close();
?>