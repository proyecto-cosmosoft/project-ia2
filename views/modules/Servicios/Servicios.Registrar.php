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
    <title>Registrar Servicio - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Servicio','index'); ?>" class="breadcrumb">Gestionar Servicios</a>
                    <a href="<?php echo Helpers::url('Servicio','create'); ?>" class="breadcrumb">Registrar Servicio</a>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="" method="post" class="row" id="register">
                <div class="col s12">
                    <h4 class="center-align">Registrar Servicio</h4>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-stars prefix"></i>
                    <input type="text" name="nombre_servicio" id="nombre_servicio" required>
                    <label for="nombre_servicio">Nombre del Servicio</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-open_with prefix"></i>
                    <input type="text" name="unidad_medida" id="unidad_medida" required>
                    <label for="unidad_medida">Unidad de Medida</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-attach_money prefix"></i>
                    <input type="text" name="precio_servicio" id="precio_servicio" class="validate" pattern="[0-9]+" title="Solo puede usar números." required>
                    <label for="precio_servicio">Precio</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-monetization_on prefix"></i>
                    <input type="text" name="costo_servicio" id="costo_servicio" class="validate" pattern="[0-9]+" title="Solo puede usar números." required>
                    <label for="costo_servicio">Costo</label>
                </div>
                <div class="input-field col s12">
                    <i class="icon-description prefix"></i>
                    <textarea name="descripcion_servicio" id="descripcion_servicio" cols="30" rows="10" class="materialize-textarea"></textarea>
                    <label for="descripcion_servicio">Descripción</label>
                </div>
                <div class="input-field col s12 center-align">
                    <button type="submit" class="btn a2-green waves-light waves-effect col s12">
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
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Servicio.js"></script>
</body>
</html>