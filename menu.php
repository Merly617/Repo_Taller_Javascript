<?php
include ('funciones.php');
session_start();
$_SESSION['nusuario']=$_POST['usuario'];
$_SESSION['nclave']=$_POST['clave'];

$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion, "select * from usuarios where usua_nomuser='{$_SESSION['nusuario']}' and usua_contra='{$_SESSION['nclave']}' ");

?>
<!DOCTYPE html>
<html>
<head>
<title>Menu Principal </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial -scale=1, shrink-to-fit=no">
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="miscss/estilos.css" rel="stylesheet"/>
<script src="js/bootstrap.js"></script>

</head>
<body>
<center>
  <div id="transfer" class="container">
  <br>
  <div class="outline">
  <?php if($resultado->num_rows>0)  { ?>  <img src="virtual.jpg" width="320px"> <?php } ?>
      <div id="div3" >
      <?php
      if ($resultado->num_rows>0)
      {
          $fila = $resultado-> fetch_object();
          $_SESSION['Tipo_usuario']=$fila->usua_tipo;
          ?>
          <label class="font"> Bienvenido <?php echo $_SESSION['nusuario'] ?>  </label><br>
  <input style="width:40%;" type="button" class="control" onclick="location.href ='registro_aprendiz.php' " value="Registro de aprendices">
  <input style="width:40%;" type="button" class="control" onclick="location.href ='consulta_aprendiz.php' "value="Consulta de aprendices">
<br> <br>
  <input style="width:40%;" type="button" class="control" onclick="location.href ='modificar_aprendiz.php' " value="Actualizacion de aprendices">
  <input style="width:40%;" type="button" class="control" onclick="location.href ='borrar_aprendiz.php' " value="Borrar aprendices">
<br><br>
   <input style="width:40%;" type="button" class="control" onclick="location.href ='index.php' " value="Crear programa">
  <input style="width:40%;"  type="button" class="control" onclick="location.href ='index.php' " value="Consultar programa">
<br><br>
  <input style="width:40%;" type="button" class="control" onclick="location.href ='index.php' " value="Modificar programa">
  <input style="width:40%;" type="button" class="control" onclick="location.href ='index.php ' " value="Eliminar programa">
<br><br>
  <input style="width:40%;" type="button" class="control" onclick="location.href ='index.php' " value="Crear ficha">
  <input style="width:40%;"  type="button" class="control" onclick="location.href ='index.php' " value="Consultar ficha">
<br><br> 
  <input style="width:40%;"  type="button" class="control" onclick="location.href ='index.php' " value="Modificar ficha">
  <input style="width:40%;" type="button" class="control" onclick="location.href ='index.php' " value="Eliminar ficha">
  <?php
      }
      else
      {
          echo "Usuario o clave invalido";
      }
      $miconexion->close();
      ?>
      <br><br>
      </div>
      </div>
      </div>
</body>
</html>