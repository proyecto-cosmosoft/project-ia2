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
    <title>Inicio - Inversiones A2</title>
</head>
<body>
    <!-- Header -->
    <?php require_once "views/layouts/header.php" ?>

    <!-- Main Container -->
    <main>
        <div class="container-fluid">
            <!-- Enlaces rapidos -->
            <div class="row">
                <div class="col s12 breadcrumb-nav left-align">
                    <a href="#!" class="breadcrumb">Inicio</a>
                </div>
                <!-- <div class="col s12">
                    <h4>Enlaces rápidos</h4>
                </div> -->
                <div class="col s12 m3">
                    <a href="<?php echo Helpers::url('Usuario','index'); ?>" class="btn-app blue">
                        <i class="icon-group_add"></i>
                        <span class="truncate">Gestionar Usuarios</span>
                    </a>
                </div>
                <div class="col s12 m3">
                    <a href="<?php echo Helpers::url('Producto','index'); ?>" class="btn-app green">
                        <i class="icon-loyalty"></i>
                        <span class="truncate">Gestionar Producto Terminado</span>
                    </a>
                </div>
                <div class="col s12 m3">
                    <a href="<?php echo Helpers::url('Cliente','index'); ?>" class="btn-app purple">
                        <i class="icon-contact_phone"></i>
                        <span class="truncate">Gestionar Clientes</span>
                    </a>
                </div>
                <div class="col s12 m3">
                    <a href="<?php echo Helpers::url('Pedido','index'); ?>" class="btn-app">
                        <i class="icon-library_books"></i>
                        <span class="truncate">Gestionar Pedidos</span>
                    </a>
                </div>
                <div class="col s12 m3">
                    <a href="<?php echo Helpers::url('Factura','index'); ?>" class="btn-app red">
                        <i class="icon-event_available"></i>
                        <span class="truncate">Facturación de Ventas</span>
                    </a>
                </div>
                <div class="col s12 m3">
                    <a href="<?php echo Helpers::url('Configuracion','index'); ?>" class="btn-app yellow">
                        <i class="icon-build"></i>
                        <span class="truncate">Configuración</span>
                    </a>
                </div>
                <div class="col s12 m3">
                    <a href="<?php echo Helpers::url('Reporte','index'); ?>" class="btn-app cyan">
                        <i class="icon-report"></i>
                        <span class="truncate">Reportes</span>
                    </a>
                </div>
                <div class="col s12 m3">
                    <a href="<?php echo Helpers::url('Seguridad','index'); ?>" class="btn-app green">
                        <i class="icon-security"></i>
                        <span class="truncate">Seguridad</span>
                    </a>
                </div>
                <div class="col s12 m3">
                    <a href="<?php echo Helpers::url('Mantenimiento','index'); ?>" class="btn-app orange">
                        <i class="icon-perm_data_setting"></i>
                        <span class="truncate">Mantenimiento</span>
                    </a>
                </div>
            </div>
            <div class="divider"></div>
            <!-- Widgets -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="widget bootstrap-widget stats">
                        <div class="widget-stats-icon red white-text">
                            <i class="icon-group_add"></i>
                        </div>
                        <div class="widget-stats-content">
                            <span class="widget-stats-title">New customers</span>
                            <span class="timer widget-stats-number" data-from="0" data-to="100"></span>
                        </div>
                    </div> 
                </div>
                <div class="col s12 m4">
                    <div class="widget bootstrap-widget stats">
                        <div class="widget-stats-icon purple white-text">
                            <i class="icon-attach_money"></i>
                        </div>
                        <div class="widget-stats-content">
                            <span class="widget-stats-title">Ganancias del mes</span>
                            <span class="widget-stats-number">
                                <span class="timer" data-from="0" data-to="5000"></span>
                                <span>$</span>
                            </span>
                        </div>
                        <div class="widget-progress">
                            <div class="progress purple lighten-3">
                                <div class="determinate purple" style="width:45%"></div>
                            </div>
                        </div>
                        <div class="widget-description">
                            Incremento de un 45% en este mes.
                        </div>
                    </div> 
                </div>
                <div class="col s12 m4">
                    <div class="widget bootstrap-widget stats">
                        <div class="widget-stats-icon blue white-text">
                            <i class="icon-equalizer"></i>
                        </div>
                        <div class="widget-stats-content">
                            <span class="widget-stats-title">Ventas facturadas</span>
                            <span class="widget-stats-number">50</span>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Row para gráficos -->
            <div class="row">
                <div class="col s12 m12 xl6">
                    <div class="card">
                        <div class="card-content">
                            <canvas id="ventas"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 xl6">
                    <div class="card">
                        <div class="card-content">
                            <canvas id="ganancias"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row para tablas -->
            <div class="row">
                <div class="col s12 m6">
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Pedidos</h4></li>
                        <li class="collection-item">
                            <span class="new badge red" data-badge-caption="Pendiente"></span>
                            <span class="title"><b>Cliente:</b> Jhon Doe</span><br>
                            <span class=""><b>Contacto: </b> +1 123 4567890</span>
                            <!-- <a href="!#" class="secondary-content"><i class="icon-find_in_page"></i></a> -->
                        </li>
                        <li class="collection-item">
                            <span class="new badge red" data-badge-caption="Pendiente"></span>
                            <span class="title"><b>Cliente:</b> Anna Frank</span><br>
                            <span class=""><b>Contacto: </b> +1 123 4567890</span>
                        </li>
                        <li class="collection-item">
                            <span class="new badge red" data-badge-caption="Pendiente"></span>
                            <span class="title"><b>Cliente:</b> Jhon Doe</span><br>
                            <span class=""><b>Contacto: </b> +1 123 4567890</span>
                        </li>
                        <li class="collection-item">
                            <span class="new badge red" data-badge-caption="Pendiente"></span>
                            <span class="title"><b>Cliente:</b> Jhon Doe</span><br>
                            <span class=""><b>Contacto: </b> +1 123 4567890</span>
                        </li>
                        <li class="collection-item">
                            <span class="new badge red" data-badge-caption="Pendiente"></span>
                            <span class="title"><b>Cliente:</b> Jhon Doe</span><br>
                            <span class=""><b>Contacto: </b> +1 123 4567890</span>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m6">
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Top Productos</h4></li>
                        <li class="collection-item">
                            <div>
                                <span class="title"><b>Producto: </b>Camisa normal</span><br>
                                <span><b>Ventas totales: </b>135</span>
                                <!-- <a href="#!" class="secondary-content" style="font-size:28px"><i class="icon-find_in_page"></i></a> -->
                            </div>
                        </li>
                        <li class="collection-item">
                            <div>
                                <span class="title"><b>Producto: </b>Camisa normal</span><br>
                                <span><b>Ventas totales: </b>135</span>
                                <!-- <a href="#!" class="secondary-content"><i class="icon-find_in_page"></i></a> -->
                            </div>
                        </li>
                        <li class="collection-item">
                            <div>
                                <span class="title"><b>Producto: </b>Camisa normal</span><br>
                                <span><b>Ventas totales: </b>135</span>
                                <!-- <a href="#!" class="secondary-content"><i class="icon-find_in_page"></i></a> -->
                            </div>
                        </li>
                        <li class="collection-item">
                            <div>
                                <span class="title"><b>Producto: </b>Camisa normal</span><br>
                                <span><b>Ventas totales: </b>135</span>
                                <!-- <a href="#!" class="secondary-content"><i class="icon-find_in_page"></i></a> -->
                            </div>
                        </li>
                        <li class="collection-item">
                            <div>
                                <span class="title"><b>Producto: </b>Camisa normal</span><br>
                                <span><b>Ventas totales: </b>135</span>
                                <!-- <a href="#!" class="secondary-content"><i class="icon-find_in_page"></i></a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once "views/layouts/footer.php"; ?>

    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/materialize.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/owner.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/plugins/Chart.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/plugins/sweetalert.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/plugins/bootstrap-notify.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/plugins/jquery.countTo.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/dashboard.js"></script>
</body>
</html>