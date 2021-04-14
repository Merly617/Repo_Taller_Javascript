<!DOCTYPE html>
<html>
    <head>
        <title> Registro de Aprendices </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="miscss/estilos.css" rel="stylesheet"/>
<script src="js/bootstrap.js"></script>
    </head>
    <body>
    <center>
        <div id="div1" class="container">
            <br>
        <div id="div2">
            <?php session_start();if (! empty($_SESSION['Tipo_usuario']))  { ?> <img src="pieza.png"> <?php } ?>
            <div id="div3">
                <?php
                if ($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
                {
                ?>
                <form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
                    <div class="col-md-12">
                        <strong class="lgris"> Ingrese los datos del aprendiz </strong>
                        <br>
                        <label class="lgris">Identificacion</label>
                        <br>
                        <div class="form-row">
                        <br>
                        <div class="form-group col-xs-2">
                            <select class="form-control" name="tipoid">
                                <option value="CC" selected>CC</option>
                                <option value="TI">TI</option>
                                <option value="RC">RC</option>
                                <option value="PEP">PEP</option>
                </select>
                </div>
                   <div class="form-group col-md-6">
                       <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION" required/><br>
                         <label class="lgris">Nombres: </label>
                         <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/><br>
                         <label class="lgris">Apellidos: </label>
                         <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required/><br>
                         <label class="lgris">Direccion: </label>
                         <input class="form-control" style="text-transform: uppercase;" type="text" name="direccion" value="" placeholder="Direccion" required/><br>
                         <label class="lgris">Telefono: </label>
                         <input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" value="" placeholder="TELEFONO" required/><br>
                        <label class="lgris">Ficha: </label>
                        <input class="form-control" type="number" name="telefono" min="9999" max="9999999999999" value="" placeholder="FICHA" required/><br>
                        <input class="btn btn-primary" type="submit" value="Guardar" >
                </div>
                </form>
                <?php
                }
                else
                {
                    echo "No tiene permisos para realizar esta accion";
    
                }
                ?>
                <br>
                </div>
                </div>
                </div>
    </body>
</html>