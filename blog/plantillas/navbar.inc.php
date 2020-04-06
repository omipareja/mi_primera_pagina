<?php
Conexion::abrir_conexion();
$total_usuarios = RepositorioUsuario :: obtener_numero_usuarios(Conexion::obtener_conexion());
//echo count($usuarios);
Conexion::cerrar_conexion();
?>

<nav class="navbar navbar-default navbar-static-top"> <!---declaro el tipo de barra a usar-->
    <div class="container"> <!---contenedor donde estara la barra-->
        <div class="navbar-header"><!---como se muestra la parte superior de la barra el boton por si se encoge la pagina-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><!---llama el id de las opciones de la barra-->
                <span class="sr-only">Este botón despliega la barra de navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CONTROL DE LOS MEJORES ANIMES</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse"><!---contiene las opciones de la barra-->
            <ul class="nav navbar-nav"> <!---lista desordenada para los enlaces-->
                <li><a href="#">ONE PIECE</a></li><li>
                    <a href="#">EMISION</a></li>
                <li><a href="#">REDES SOCIALES</a></li>
            </ul>
            <ul class =" nav navbar-nav navbar-right">
                <li>
                    <a href="#">

                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        
                        <?php
                        echo $total_usuarios;
                        ?>
                    </a>
                </li>
                <li><a href="#">  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar Sesión</a></li>
                <li><a href="registro.php">  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registro</a></li>
            </ul>
        </div>
    </div> 
</nav>