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
    <title>Consultar Usuarios - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Usuario','index'); ?>" class="breadcrumb">Gestionar Usuarios</a>
                    <a href="<?php echo Helpers::url('Usuario','getAll'); ?>" class="breadcrumb">Consultar Usuarios</a>
                </div>
                <div class="col s12">
                    <h4 class="center-align">Consultar Usuarios</h4>
                </div>
                <div class="col s12">
                    <table class="centered responsive-table highlight">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Rol</th>
                                <th>Detalles</th>
                                <!-- <th></th>
                                <th></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>codeslator</td>
                                <td>28286639</td>
                                <td>Andrés Meléndez</td>
                                <td>SuperUsuario</td>
                                <td><a href="<?php echo Helpers::url('Usuario','details'); ?>" class="btn btn-small a2-green waves-effect waves-light"><i class="icon-pageview"></i></a></td>
                            </tr>
                            <tr>
                                <td>yohnn_d</td>
                                <td>27085898</td>
                                <td>Yohnneiber Díaz</td>
                                <td>Administrador</td>
                                <td><a href="<?php echo Helpers::url('Usuario','details'); ?>" class="btn btn-small a2-green waves-effect waves-light"><i class="icon-pageview"></i></a></td>
                            </tr>
                            <tr>
                                <td>jm_soft</td>
                                <td>27317920</td>
                                <td>Jhon Morán</td>
                                <td>Lacayo</td>
                                <td><a href="<?php echo Helpers::url('Usuario','details'); ?>" class="btn btn-small a2-green waves-effect waves-light"><i class="icon-pageview"></i></a></td>
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
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Usuario.js"></script>
</body>
</html>