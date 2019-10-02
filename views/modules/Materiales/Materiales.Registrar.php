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
    <title>Registrar Material - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Material','index'); ?>" class="breadcrumb">Gestionar Materiales</a>
                    <a href="<?php echo Helpers::url('Material','create'); ?>" class="breadcrumb">Registrar Material</a>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="" method="post" class="row" id="register">
                <div class="col s12">
                    <h4 class="center-align">Registrar Material</h4>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-streetview prefix"></i>
                    <input type="text" name="nombre_material" id="nombre_material" required>
                    <label for="nombre_material">Nombre del Material</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-exposure_plus_1 prefix"></i>
                    <input type="text" name="unidad_material" id="unidad_material" required>
                    <label for="unidad_material">Unidades</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-attach_money prefix"></i>
                    <input type="number" name="precio_material" id="precio_material" required>
                    <label for="precio_material">Precio del Material</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-description prefix"></i>
                    <textarea name="descripcion_material" id="descripcion_material" cols="30" rows="10" class="materialize-textarea"></textarea>
                    <label for="descripcion_material">Descripción</label>
                </div>
                <div class="input-field col s12 center-align">
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
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Meterial.js"></script>
</body>
</html>