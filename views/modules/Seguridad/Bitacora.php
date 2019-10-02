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
    <title>Historial - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Seguridad','bitacora'); ?>" class="breadcrumb">Historial</a>
                </div>
                <div class="col s12">
                    <h4 class="center-align">Historial</h4>
                </div>
                <div class="col s12">
                    <table class="centered responsive-table highlight">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Rol</th>
                                <th>Módulo</th>
                                <th>Acción</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <!-- <th></th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>codeslator</td>
                                <td>SuperUsuario</td>
                                <td>Sistema</td>
                                <td>Iniciar sesión</td>
                                <td>02/08/2019</td>
                                <td>7:10:20</td>
                            </tr>
                            <tr>
                                <td>codeslator</td>
                                <td>SuperUsuario</td>
                                <td>Usuarios</td>
                                <td>Registrar nuevo: YohnnD</td>
                                <td>02/08/2019</td>
                                <td>7:18:20</td>
                            </tr>
                            <tr>
                                <td>codeslator</td>
                                <td>SuperUsuario</td>
                                <td>Usuarios</td>
                                <td>Consultar registros</td>
                                <td>02/08/2019</td>
                                <td>7:20:20</td>
                            </tr>
                            <tr>
                                <td>codeslator</td>
                                <td>SuperUsuario</td>
                                <td>Usuarios</td>
                                <td>Cerrar sesión</td>
                                <td>02/08/2019</td>
                                <td>7:25:20</td>
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
</body>
</html>