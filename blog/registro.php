<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Registro';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center"> Formulario de registro</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <h3 class="panel-title"> Instrucciones</h3>
                </div>
                <div class="panel-body">
                    <br>
                    <p class="text-justify">
                        para unirte al blog anime,Introduce in nombre de usuario
                        un email valido y una contraseña que incluya mayusculas 
                        y minusculas.
                    </p>
                    <br>
                    <a href="#">¿ya tienes cuenta?</a>
                    <br>
                    <br>
                    <a href="#">¿olvidaste tu contraseña?</a>
                </div>  
            </div>
        </div> 
        <div class="col-md-6">
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <h3 class="panel-title">Introduce tus datos </h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-grop">
                            <label> Nombre de usuario</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-grop">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-grop">
                            <label>Contraseña</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-grop">
                            <label>Repite la contraseña</label>
                            <input type="password" class="form-control">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-default">Enviar Datos</button> 
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?
    include_once 'documento-cierre.php';
    ?>
