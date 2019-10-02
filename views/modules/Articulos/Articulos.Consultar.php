<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/material-gradient.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/material-components.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/icons/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/owner.css">
    <title>Consultar Artículos - Inversiones A2</title>
</head>
<body>
    <!-- Header -->
    <?php require_once "views/layouts/header.php"; ?>

    <!-- Main Container -->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col s12 breadcrumb-nav left-align">
                    <a href="<?php echo Helpers::url('Home','index'); ?>" class="breadcrumb">Inicio</a>
                    <a href="<?php echo Helpers::url('Configuracion','index'); ?>" class="breadcrumb">Configuración</a>
                    <a href="<?php echo Helpers::url('Articulo','index'); ?>" class="breadcrumb">Gestionar Artículos</a>
                    <a href="<?php echo Helpers::url('Articulo','getAll'); ?>" class="breadcrumb">Consultar Artículos</a>
                </div>
                <div class="col s12">
                    <h4 class="center-align">Materiales Disponibles</h4>
                </div>
                <div class="col s12">
                    <table class="centered striped responsive-table">
                        <thead>
                            <tr>
                                <th>Articulo</th>
                                <th>Descripción</th>
                                <th>Modelo</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Celoven</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, repudiandae!</td>
                                <td>Unknown</td>
                                <td>
                                    <a href="" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-pageview"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Agujas</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, repudiandae!</td>
                                <td>Unknown</td>
                                <td>
                                    <a href="" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-pageview"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tinta</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, repudiandae!</td>
                                <td>Unknown</td>
                                <td>
                                    <a href="" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-pageview"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tijeras</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, repudiandae!</td>
                                <td>Unknown</td>
                                <td>
                                    <a href="" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-pageview"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once "views/layouts/footer.php"; ?>


    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/materialize.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/plugins/sweetalert.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/owner.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Articulo.js"></script>
</body>
</html>