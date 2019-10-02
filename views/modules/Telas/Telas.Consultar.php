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
    <title>Telas Disponibles - Inversiones A2</title>
</head>
<body>
    <!-- Header -->
    <?php require_once "views/layouts/header.php"; ?>

    <!-- Main Container -->
    <main>
        <div class="contaner-fluid">
            <div class="row">
                <div class="col s12 breadcrumb-nav left-align">
                    <a href="<?php echo Helpers::url('Home','index'); ?>" class="breadcrumb">Inicio</a>
                    <a href="<?php echo Helpers::url('Configuracion','index'); ?>" class="breadcrumb">Configuración</a>
                    <a href="<?php echo Helpers::url('Tela','index'); ?>" class="breadcrumb">Gestionar Telas</a>
                    <a href="<?php echo Helpers::url('Tela','getAll'); ?>" class="breadcrumb">Consultar Telas</a>
                </div>
                <div class="col s12">
                    <h4 class="center-align">Telas Disponibles</h4>
                </div>
                <div class="col s12">
                    <table class="centered striped responsive-table">
                        <thead>
                            <tr>
                                <th>Tela</th>
                                <th>Descripción</th>
                                <th>U. Medida</th>
                                <th>Tipo</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Seda</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, repudiandae!</td>
                                <td>Metros</td>
                                <td>???</td>
                                <td>
                                    <a href="" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-pageview"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Seda</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, repudiandae!</td>
                                <td>Metros</td>
                                <td>???</td>
                                <td>
                                    <a href="" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-pageview"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Seda</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, repudiandae!</td>
                                <td>Metros</td>
                                <td>???</td>
                                <td>
                                    <a href="" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-pageview"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Seda</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, repudiandae!</td>
                                <td>Metros</td>
                                <td>???</td>
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
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Tela.js"></script>
</body>
</html>