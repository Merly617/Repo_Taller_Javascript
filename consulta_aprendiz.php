<!DOCTYPE html>
<html>
<head>
<title>Consulta de Aprendices</title>
<meta http-ewuiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="miscss/estilos.css" rel="stylesheet"/>
<script src="js/bootstrap.js"></script>
</head>
<body>
<center>
   <div id="divconsulta" class="container">
<br>
   <div id="div2">
   <div id="div4">

<form name="formulario" role="form" method="post" >
   <div class="col-md-12">
<h1 class="lgris">Ingrese criterio de busqueda</h1>
<hr>
<img src="logo.png">
<hr>

<br> <br>
   <div class="form-row">
   <div class="w3-btn w3-white w3-border w3-border-red w3-round-large">
<input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION" /><br>
</div>
<div class="w3-btn w3-white w3-border w3-border-red w3-round-large">
<input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" /><br>
</div>
<div class="w3-btn w3-white w3-border w3-border-red w3-round-large">
<input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" />
</div>
<div class="w3-btn w3-white w3-border w3-border-red w3-round-large">
<br>
<input class="btn btn-danger" type="submit" value="Consultar"></br>
</div>
</div>
<br>
</div>
</form>
<br>
</div>

<div id="divconsulta2">
<?php
if($_SERVER['REQUEST_METHOD']==='POST')
  {
    include('funciones.php');
    $vnumid=$_POST['numid'];
    $vnombres=$_POST['nombres'];
    $vapellidos=$_POST['apellidos'];
    $miconexion=conectar_bd('', 'sena_bd');
    $resultado=consulta($miconexion, "select * from aprendices where trim(Apre_Numid) like '%{$vnumid}%' and (trim(Apre_Nombres) like '%{$vnombres}%' and trim(Apre_Apellidos) like '%{$vapellidos}%')");
        if($resultado->num_rows>0)

    {
    while($fila = $resultado->fetch_object())
      {
          echo $fila->apre_id." ".$fila->apre_tipoid." ".$fila->apre_numid." ".$fila->apre_nombres." ".$fila->apre_apellidos." ".$fila->apre_direccion." ".$fila->apre_telefono." ".$fila->apre_ficha."<br>";
      }
    }

       else   {
            echo "No existen registros";
       }
          $miconexion->close();
    }
    ?>
   </div>
   </div>
   </div>
</body>
</html>