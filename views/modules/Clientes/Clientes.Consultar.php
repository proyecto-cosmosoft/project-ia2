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
    <title>Consultar Clientes - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Cliente','index'); ?>" class="breadcrumb">Gestionar Clientes</a>
                    <a href="<?php echo Helpers::url('Cliente','getAll'); ?>" class="breadcrumb">Consultar Clientes</a>
                </div>
                <div class="col s12 center-align">
                    <h4>Consultar Clientes</h4>
                </div>
                <div class="col s12">
                    <table class="responsive-table highlight centered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Identificación</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Petra Pérez</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, eveniet.</td>
                                <td>V-12345678</td>
                                <td>+58 123 4567890</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td><a href="<?php echo Helpers::url('Cliente','details'); ?>" class="btn btn-small btn-floating blue waves-effect waves-light"><i class="icon-find_in_page"></i></a></td>
                            </tr>
                            <tr>
                                <td>Anna Frank</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, eveniet.</td>
                                <td>V-12345678</td>
                                <td>+1 123 4567890</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td><a href="<?php echo Helpers::url('Cliente','details'); ?>" class="btn btn-small btn-floating blue waves-effect waves-light"><i class="icon-find_in_page"></i></a></td>
                            </tr>
                            <tr>
                                <td>Jhon Doe</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, eveniet.</td>
                                <td>V-12345678</td>
                                <td>+1 123 4567890</td>
                                <td>Lorem ipsum dolor sit amet.</td>
                                <td><a href="<?php echo Helpers::url('Cliente','details'); ?>" class="btn btn-small btn-floating blue waves-effect waves-light"><i class="icon-find_in_page"></i></a></td>
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