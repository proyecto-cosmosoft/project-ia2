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
    <title>Registrar Pedido - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Pedido','create'); ?>" class="breadcrumb">Registrar Pedido</a>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="" method="post" class="row" id="register">
                <div class="col s12">
                    <h4 class="center-align">Registrar Pedido</h4>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-person prefix"></i>
                    <input type="text" name="cedula_cliente" id="cedula_cliente" class="validate" minlength="5" maxlength="15" pattern="[VvJjEe0-9]+" title="Solo puede usar números del 0-9 y V, J ó E" required>
                    <label for="cedula_cliente">Cedula del Cliente</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-compare_arrows prefix"></i>
                    <select name="status_pedido" id="status_pedido">
                        <option value="null" selected disabled>Elige una opción</option>
                        <option value="">Option </option>
                        <option value="">Option </option>
                        <option value="">Option </option>
                        <option value="">Option </option>
                    </select>
                    <label for="status_pedido">Estado del Pedido</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-insert_invitation prefix"></i>
                    <input type="text" name="fecha_pedido" id="fecha_pedido" class="datepicker">
                    <label for="fecha_pedido">Fecha del Pedido</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-description prefix"></i>
                    <textarea name="descripcion_pedido" id="descripcion_pedido"  class="materialize-textarea"></textarea>
                    <label for="descripcion_pedido">Descripción</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-star prefix"></i>
                    <select name="id_servicio" id="id_servicio">
                        <option value="null" disabled selected>Elige una opción</option>
                        <option value="">Confección textil</option>
                        <option value="">Cerigrafía</option>
                        <option value="">Sublimación</option>
                        <option value="">Diseño gráfico</option>
                    </select>
                    <label for="id_servicio">Servicio</label>
                </div>
                <!-- <div class="input-field col s12 m6">
                    <i class="icon-event_available prefix"></i>
                    <input type="text" name="fecha_entrega_pedido" id="fecha_entrega_pedido" class="datepicker">
                    <label for="fecha_entrega_pedido">Fecha de Entrega</label>
                </div> -->
                <div class="input-field col s12 m6">
                    <i class="icon-plus_one prefix"></i>
                    <input type="number" name="cantidad_prenda" id="cantidad_prenda" class="validate" min="24" pattern="[0-9]+" title="Solo puede usar números." required>
                    <label for="cantidad_prenda">Cantidad de Prendas</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-playlist_add_check prefix"></i>
                    <input type="number" name="cantidad_medida" id="cantidad_medida" class="validate" min="24" pattern="[0-9]+" title="Solo puede usar números." required>
                    <label for="cantidad_medida">Cantidad por Medida</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="icon-attach_money prefix"></i>
                    <input type="number" name="precio_servi_pedido" id="precio_servi_pedido" class="validate" pattern="[0-9]+" title="Solo puede usar números." required>
                    <label for="precio_servi_pedido">Precio del Pedido</label>
                </div>
                <div class="input-field col s12 center-align">
                    <button type="submit" class="btn a2-green waves-effect waves-light col s12">
                        <i class="icon-add right"></i>
                        Registrar
                        <i class="icon-receipt left"></i>
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
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Pedido.js"></script>
</body>
</html>