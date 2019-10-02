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
    <title>Consultar Pedidos - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Pedido','index'); ?>" class="breadcrumb">Gestionar Pedidos</a>
                    <a href="<?php echo Helpers::url('Pedido','getAll'); ?>" class="breadcrumb">Consultar Pedidos</a>
                </div>
                <div class="col s12">
                    <h4 class="center-align">Listado de Pedidos</h4>
                </div>
                <div class="col s12">
                    <table class="responsive-table centered striped">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Cliente</th>
                                <th>Estado</th>
                                <th>Fecha del Pedido</th>
                                <th>Fecha de Entrega</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PDD001</td>
                                <td>Andrés Meléndez</td>
                                <td>Facturado</td>
                                <td>10/08/2019</td>
                                <td>20/08/2019</td>
                                <td><a href="<?php echo Helpers::url('Pedido','details'); ?>" class="btn btn-floating btn-small pink waves-effect waves-light"><i class="icon-pageview"></i></a></td>
                            </tr>
                            <tr>
                                <td>PDD002</td>
                                <td>Jhon Morán</td>
                                <td>En espera</td>
                                <td>17/08/2019</td>
                                <td>27/08/2019</td>
                                <td><a href="<?php echo Helpers::url('Pedido','details'); ?>" class="btn btn-floating btn-small pink waves-effect waves-light"><i class="icon-pageview"></i></a></td>
                            </tr>
                            <tr>
                                <td>PDD003</td>
                                <td>Gabriel Oropeza</td>
                                <td>En proceso</td>
                                <td>22/08/2019</td>
                                <td>02/09/2019</td>
                                <td><a href="<?php echo Helpers::url('Pedido','details'); ?>" class="btn btn-floating btn-small pink waves-effect waves-light"><i class="icon-pageview"></i></a></td>
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
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Pedido.js"></script>
</body>
</html>