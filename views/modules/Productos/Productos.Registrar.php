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
    <title>Registrar Producto - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Producto','create'); ?>" class="breadcrumb">Registrar Producto</a>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="" method="post" class="row" id="register">
                <div class="col s12 title center-align">
                    <h4>Registrar Producto</h4>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-label prefix"></i>
                    <input id="nombre_producto" type="text" name="nombre_producto" class="validate" minlength="5" maxlength="30" pattern="[A-Za-z0-9]+" title="Escribe el nombre del producto. max(30)" required>
                    <label for="nombre_producto">Nombre del Producto</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-description prefix"></i>
                    <textarea name="descripcion_producto" id="descripcion_producto" cols="30" rows="10" class="materialize-textarea"></textarea>
                    <label for="descripcion_producto">Descripción</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-redeem prefix"></i>
                    <select name="tipo_producto" id="tipo_producto" required>
                        <option value="" disabled selected>Elije el tipo</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                    </select>
                    <label for="tipo_producto">Tipo del Producto</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-compare prefix"></i>
                    <select name="modelo_producto" id="modelo_producto" required>
                        <option value="" disabled selected>Elije el modelo</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                    </select>
                    <label for="modelo_producto">Modelo del Producto</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-monetization_on prefix"></i>
                    <input type="number" name="costo_producto" id="costo_producto" class="validate" min="0" pattern="[0-9]+" title="Solo puede usar números." required>
                    <label for="costo_producto">Costo</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-monetization_on prefix"></i>
                    <input type="number" name="precio_producto" id="precio_producto" class="validate" min="0" pattern="[0-9]+" title="Solo puede usar números." required>
                    <label for="precio_producto">Precio</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-call_received prefix"></i>
                    <input type="number" name="stock_min_producto" id="stock_min_producto" class="validate" min="24" pattern="[0-9]+" title="Solo puede usar números." required>
                    <label for="stock_min_producto">Stock Mínimo</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-call_made prefix"></i>
                    <input type="number" name="stock_max_producto" id="stock_max_producto" class="validate" min="24" pattern="[0-9]+" title="Solo puede usar números." required>
                    <label for="stock_max_producto">Stock Máximo</label>
                </div>
                <div class="input-field col s12 center-align">
                    <button type="submit" class="btn waves-effect waves-light a2-green">
                        Registrar 
                        <i class="icon-save right"></i>
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
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Producto.js"></script>
</body>
</html>