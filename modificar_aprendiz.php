<DOCTYPE html>
<html>
<html lang="es" class="h-100">
<head>
<title>Modificacion de Aprendices</title>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="modos.css" rel="stylesheet"/>
<script src="js/bootstrap.js"></script>
</head>
<body>
    <center>
<div id="divconsulta" class="container">
<br>
  <div id="div4">
     <form name="formulario" role="form" method="post" >
     <div class="col-md-12">
        <strong class="reset">Ingrese criterio de busqueda </strong>
        <br><br><br>
        <div class="form-row">
        <div class="form-group col-md-5">
        <input class="form-control" type="number" name="numid" min="9999"max="9999999999999" autofocus value=""  placeholder="IDENTIFICACION" />
        <br><br>
        </div>
    <div class="form-group col-md-3">
        <input class="btn btn-primary" type="submit" value="Consultar">
    </div>
    </div>
        <br>
        </div>
        </form>
        <br>
    </div>

    <div id="divconsulta2">
        <?php
        if ($_SERVER['REQUEST_METHOD']==='POST')
          {
            include('funciones.php');
            session_start();
            $vnumid=$_POST['numid'];
            $miconexion=conectar_bd('', 'sena_bd');
            $resultado=consulta($miconexion,"select * from aprendices where Apre_Numid='{$vnumid}' ");
            if ($resultado->num_rows>0)
            {
                $fila=$resultado->fetch_object();
                $_SESSION['ide1']=$fila->apre_id;
                ?>
                <form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
                <div class="col-md-12">
                <strong class="learn">Datos del Aprendiz</strong><br>

                <label class="learn">Id: </label>
                <input class="form-control" type="text" name="ide" disabled="disabled" value="<?php echo $fila->apre_id ?>"/>

                <label class="learn">Nombres: </label>
                <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" required value="<?php echo $fila->apre_nombres ?>" required/>

                <label class="learn">Apellidos:</label>
                <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="<?php echo $fila->apre_apellidos ?>" required/>

                <label class="learn">Direccion:</label>
                <input class="form-control" style="text-transform:uppercase;" type="text" name="direccion" value="<?php echo $fila->apre_direccion ?>" required/>
            

                <label class="learn">Telefono:</label>
                <input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" value="<?php echo $fila->apre_telefono ?>" required/>
                <br>
                <input class="btn btn-primary" type="submit" value="Actualizar" >
                <br>
                </div>
                </form>
                <?php
            }
            else{
                echo "No existen registros";
                }
                $miconexion->close();
            }?>
            </div>
            </div>
            </div>
</body>
</html>


