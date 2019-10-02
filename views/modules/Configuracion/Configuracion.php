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
    <title>Configuraciones - Inversiones A2</title>
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
                </div>
                <div class="col s12 m6">
                    <a href="<?php echo Helpers::url('Servicio','index'); ?>" class="btn-app red">
                        <i class="icon-star"></i>
                        <span>Gestionar Servicios</span>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="<?php echo Helpers::url('Tela','index'); ?>" class="btn-app indigo">
                        <i class="icon-layers"></i>
                        <span>Gestionar Telas</span>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="<?php echo Helpers::url('Material','index'); ?>" class="btn-app orange">
                        <i class="icon-streetview"></i>
                        <span>Gestionar Materiales</span>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="<?php echo Helpers::url('Articulo','index'); ?>" class="btn-app light-blue">
                        <i class="icon-content_cut"></i>
                        <span>Gestionar Artículos</span>
                    </a>
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
</body>
</html>