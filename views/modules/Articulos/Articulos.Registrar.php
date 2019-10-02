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
    <title>Registrar Artículo - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Articulo','create'); ?>" class="breadcrumb">Registrar Artículo</a>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="" method="post" class="row" id="register">
                <div class="col s12">
                    <h4 class="center-align">Registrar Artículo</h4>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-label prefix"></i>
                    <input type="text" name="nombre_articulo" id="nombre_articulo" required>
                    <label for="nombre_articulo">Nombre del Artículo</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-device_hub prefix"></i>
                    <input type="text" name="tipo_articulo" id="tipo_articulo" required>
                    <label for="tipo_articulo">Tipo de Artículo</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-filter_vintage prefix"></i>
                    <input type="text" name="modelo_articulo" id="modelo_articulo" required>
                    <label for="modelo_articulo">Modelo del Artículo</label>
                </div>
                <div class="input-field col s12 m6 center-align">
                    <button type="submit" class="btn a2-green waves-effect waves-light col s12">
                        Registrar
                        <i class="icon-send right"></i>
                    </button>                    
                </div>
            </form>
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