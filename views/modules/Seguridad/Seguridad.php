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
    <title>Seguridad - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Seguridad','index'); ?>" class="breadcrumb">Seguridad</a>
                </div>
                <div class="col s12 m6">
                    <a href="<?php echo Helpers::url('Seguridad','bitacora'); ?>" class="btn-app green">
                        <i class="icon-format_list_bulleted"></i>
                        <span>Historial</span>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="<?php echo Helpers::url('',''); ?>" class="btn-app red">
                        <i class="icon-supervisor_account"></i>
                        <span>Mostrar Roles</span>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="<?php echo Helpers::url('',''); ?>" class="btn-app orange">
                        <i class="icon-transfer_within_a_station"></i>
                        <span>Mostrar Permisos</span>
                    </a>
                </div>
                <div class="col s12 m6">
                    <a href="<?php echo Helpers::url('',''); ?>" class="btn-app indigo">
                        <i class="icon-apps"></i>
                        <span>Mostrar Módulos</span>
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