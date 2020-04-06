<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'BLOG ANIME';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>



<!---barra de navegacion-->


<div class="container">
    <div class="jumbotron">
        <h1>blog anime</h1>
        <p>Anime y mucho mas</p>

    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Busqueda
                        </div>
                        <div class="panel_body">
                            <div class="form-grop">
                                <input type="search" class="form-control" placeholder="Busca un anime">
                            </div>
                            <button class="form-control">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-filter" aria-hidden="true"></span>  Filtro
                        </div>
                        <div class="panel_body">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>  Archivo
                        </div>
                        <div class="panel_body">

                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Ultimos animes
                </div>
                <div class="panel_body">

                    <p> No hay nuevos extrenos</p>
                </div>
            </div>
        </div>       
    </div>     
</div>

<?
include_once 'documento-cierre.php';
?>
