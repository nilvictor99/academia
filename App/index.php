<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="ercss/index.css">
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>la academia</title>
    
</head>
<body id="indexbody">
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <a class="navbar-brand" href="#">la academia</a>
    <ul class="nav navbar-nav">

    </ul>
</nav>

<!------------ICONOS-APP---------------->

<div class="container" >
    <div class="row">
        <div class="col-md-3">
            <div class="thumbnail">
                <a data-toggle="modal" href='#sesion'>
                    <img src="icon/direccion.png" width="100px;">
                </a>
                <center><h3>Dirección</h3></center>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <a data-toggle="modal" href='#sesiondoc'>
                    <img src="icon/docente.png" width="100px;">
                </a>
                <center><h3>Docente</h3></center>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" role="dialog" id="sesion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align="center">Inicie sesión</h4>
            </div>
            <div class="modal-body">
                <form class="form-register" action="sesion.php" method="post" role="form" autocomplete="off">
                    <h4>
                        <label>Usuario:</label>
                        <input name="usuario" class="form-control" type="text" autofocus="" required="" placeholder="Ingrese su usuario"><br>
                        <label>Contraseña:</label>
                        <input name="pass" class="form-control" type="password" autofocus="" required="" placeholder="Ingrese su contraseña">
                    </h4>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"> Ingresar </button>
                        <button type="submit" class="btn btn-info" data-dismiss="modal"> Cancelar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" role="dialog" id="sesiondoc">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 align="center">Inicie sesión</h4>
            </div>
            <div class="modal-body">
                <form class="form-register" action="sesion.php" method="post" role="form" autocomplete="off">
                    <h4>
                        <label>Usuario:</label>
                        <input name="usuario" class="form-control" type="text" autofocus="" required="" placeholder="Ingrese su usuario"><br>
                        <label>Contraseña:</label>
                        <input name="pass" class="form-control" type="password" autofocus="" required="" placeholder="Ingrese su contraseña">
                    </h4>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger"> Ingresar </button>
                        <button type="submit" class="btn btn-info" data-dismiss="modal"> Cancelar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 </body>
 </html>
