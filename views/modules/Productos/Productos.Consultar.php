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
    <title>Ver Productos - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Producto','index'); ?>" class="breadcrumb">Gestionar Productos Terminados</a>
                    <a href="<?php echo Helpers::url('Producto','getAll'); ?>" class="breadcrumb">Consultar Productos</a>
                </div>
                <div class="col s12">
                    <h4 class="center-align">Productos terminados</h4>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-image">
                            <img src="<?php echo BASE_URL; ?>assets/images/producto-1.jpg" alt="" srcset="">
                        </div>
                        <div class="card-content">
                            <span><b>Producto:</b> Camisa de caballero</span><br>
                            <span><b>Descripción:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, facere.</span><br>
                            <span><b>Precio:</b> 20$</span><br>

                        </div>
                        <div class="card-footer center-align">
                            <a href="<?php echo Helpers::url('Producto','details'); ?>" class="btn a2-green btn-rounded waves-effect waves-light">Detalles<i class="icon-find_in_page right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-image">
                            <img src="<?php echo BASE_URL; ?>assets/images/producto-1.jpg" alt="" srcset="">
                        </div>
                        <div class="card-content">
                            <span><b>Producto:</b> Camisa de caballero</span><br>
                            <span><b>Descripción:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, facere.</span><br>
                            <span><b>Precio:</b> 20$</span><br>

                        </div>
                        <div class="card-footer center-align">
                            <a href="<?php echo Helpers::url('Producto','details'); ?>" class="btn a2-green btn-rounded waves-effect waves-light">Detalles<i class="icon-find_in_page right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <!-- <div class="card-header"></div> -->
                        <div class="card-image">
                            <img src="<?php echo BASE_URL; ?>assets/images/producto-1.jpg" alt="" srcset="">
                        </div>
                        <div class="card-content">
                            <span><b>Producto:</b> Camisa de caballero</span><br>
                            <span><b>Descripción:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, facere.</span><br>
                            <span><b>Precio:</b> 20$</span><br>

                        </div>
                        <div class="card-footer center-align">
                            <a href="<?php echo Helpers::url('Producto','details'); ?>" class="btn a2-green btn-rounded waves-effect waves-light">Detalles<i class="icon-find_in_page right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Optional -->
            <div class="row">
                <div class="col s12">
                    <table class="centered highlight responsive-table">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Costo</th>
                                <th>Precio</th>
                                <th>Cant. Disp</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ASDF001</td>
                                <td>Franela Olímpica</td>
                                <td>Franela de algodón cuello redondo</td>
                                <td>5$</td>
                                <td>8$</td>
                                <td>50</td>
                                <td><a href="<?php echo Helpers::url('Producto','details'); ?>" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-find_in_page"></i></a></td>
                            </tr>
                            <tr>
                                <td>ASDF002</td>
                                <td>Franela Regular</td>
                                <td>Franela chemese cuello V</td>
                                <td>5$</td>
                                <td>8$</td>
                                <td>100</td>
                                <td><a href="<?php echo Helpers::url('Producto','details'); ?>" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-find_in_page"></i></a></td>
                            </tr>
                            <tr>
                                <td>ASDF001</td>
                                <td>Franela Olímpica</td>
                                <td>Franela de algodón cuello redondo</td>
                                <td>5$</td>
                                <td>8$</td>
                                <td>50</td>
                                <td><a href="<?php echo Helpers::url('Producto','details'); ?>" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-find_in_page"></i></a></td>
                            </tr>
                            <tr>
                                <td>ASDF001</td>
                                <td>Franela Olímpica</td>
                                <td>Franela de algodón cuello redondo</td>
                                <td>5$</td>
                                <td>8$</td>
                                <td>50</td>
                                <td><a href="<?php echo Helpers::url('Producto','details'); ?>" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-find_in_page"></i></a></td>
                            </tr>
                            <tr>
                                <td>ASDF001</td>
                                <td>Franela Olímpica</td>
                                <td>Franela de algodón cuello redondo</td>
                                <td>5$</td>
                                <td>8$</td>
                                <td>50</td>
                                <td><a href="<?php echo Helpers::url('Producto','details'); ?>" class="btn btn-small btn-floating pink waves-effect effect-light"><i class="icon-find_in_page"></i></a></td>
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
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Producto.js"></script>
</body>
</html>