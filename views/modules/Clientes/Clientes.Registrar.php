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
    <title>Registrar Cliente - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Cliente','create'); ?>" class="breadcrumb">Registrar Cliente</a>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="" method="post" class="row" id="register">
                <div class="col s12">
                    <h4 class="center-align">Registrar Cliente</h4>
                </div>
                <div class="input-field col s3 m2 xl2">
                    <i class="icon-folder_shared prefix"></i>
                    <select name="tipo_documento_cliente" id="tipo_documento_cliente">
                        <option value="" disabled selected>Elegir</option>
                        <option value="">Cedula</option>
                        <option value="">RIF</option>
                        <option value="">Pasaporte</option>
                    </select>
                    <label for="tipo_documento_cliente">Tipo</label>
                </div>
                <div class="input-field col s9 m4 xl4">
                    <input type="text" name="cedula_cliente" id="cedula_cliente" class="validate" minlength="5" maxlength="15" pattern="[VvJjEe0-9]+" title="Solo puede usar números del 0-9 y V, J ó E" required>
                    <label for="cedula_cliente">Documento de Identidad</label>
                </div>
                <div class="input-field col s12 m6 xl6">
                    <i class="icon-account_circle prefix"></i>
                    <input type="text" name="nombre_cliente" id="nombre_cliente" class="validate" minlength="5" maxlength="30" pattern="[A-Za-z]+" title="Escribe el nombre del cliente. max(30)" required>
                    <label for="nombre_cliente">Nombre del Cliente</label>
                </div>
                <div class="input-field col s12 m6 xl6">
                    <i class="icon-description prefix"></i>
                    <textarea name="descripcion_cliente" id="descripcion_cliente" cols="30" rows="10" class="materialize-textarea"></textarea>
                    <label for="descripcion_cliente">Descripción</label>
                </div>
                <div class="input-field col s12 m6 xl6">
                    <i class="icon-room prefix"></i>
                    <textarea name="direccion_cliente" id="direccion_cliente" cols="30" rows="10" class="materialize-textarea"></textarea>
                    <label for="direccion_cliente">Dirección del Cliente</label>
                </div>
                <div class="input-field col s12 m6 xl6">
                    <i class="icon-contact_phone prefix"></i>
                    <input type="text" name="telefono_cliente" id="telefono_cliente" class="validate" minlength="10" maxlength="20" pattern="[0-9+]+" title="Solo puede usar números y el signo +." required>
                    <label for="telefono_cliente">Teléfono del Cliente</label>
                </div>
                <div class="input-field col s12 m6 xl6">
                    <i class="icon-person prefix"></i>
                    <input type="text" name="representante_cliente" id="representante_cliente" class="validate" minlength="5" maxlength="30" pattern="[A-Za-z]+" title="Solo puede usar letras." required>
                    <label for="representante_cliente">Representante</label>
                </div>
                <div class="input-field col s12 center-align">
                    <button type="submit" class="btn a2-green waves-effect waves-light col s12">
                        <i class="icon-send right"></i>
                        Registrar
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
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Cliente.js"></script>
</body>
</html>