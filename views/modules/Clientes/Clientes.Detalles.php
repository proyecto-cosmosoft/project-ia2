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
    <title>Detalles - Inversiones A2</title>
</head>
<body>
    <!-- Header -->
    <?php require_once "views/layouts/header.php"; ?>

    <!-- Main Container -->
    <main>
        <div class="container">
            <form action="" class="row">
                <div class="col s12 breadcrumb-nav left-align">
                    <a href="<?php echo Helpers::url('Home','index'); ?>" class="breadcrumb">Inicio</a>
                    <a href="<?php echo Helpers::url('Cliente','index'); ?>" class="breadcrumb">Gestionar Clientes</a>
                    <a href="<?php echo Helpers::url('Cliente','getAll'); ?>" class="breadcrumb">Consultar Cliente</a>
                    <a href="<?php echo Helpers::url('Cliente','details'); ?>" class="breadcrumb">Detalles</a>
                </div>
                <div class="col s12">
                    <h4 class="center-align">Detalles del Cliente</h4>
                </div>
                <div class="input-field col s3 m2 xl2">
                    <i class="icon-folder_shared prefix"></i>
                    <select name="" id="" disabled>
                        <option value="" disabled>Elegir</option>
                        <option value="">Cedula</option>
                        <option value="" selected>RIF</option>
                    </select>
                </div>
                <div class="input-field col s9 m4 xl4">
                    <input type="text" name="documento_identidad" id="documento_identidad" value="J-1243456" disabled>
                    <label for="documento_identidad">Documento de Identidad</label>
                </div>
                <div class="input-field col s12 m6 xl6">
                    <i class="icon-account_circle prefix"></i>
                    <input type="text" name="nombre_cliente" id="nombre_cliente" value="El Castillo C.A" disabled>
                    <label for="nombre_cliente">Nombre del Cliente</label>
                </div>
                <div class="input-field col s12 m6 xl6">
                    <i class="icon-description prefix"></i>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="materialize-textarea" disabled></textarea>
                    <label for="descripcion">Descripción</label>
                </div>
                <div class="input-field col s12 m6 xl6">
                    <i class="icon-room prefix"></i>
                    <textarea name="direccion_cliente" id="direccion_cliente" cols="30" rows="10" class="materialize-textarea" disabled>Av 20 entre calles 24 y 25</textarea>
                    <label for="direccion_cliente">Dirección del Cliente</label>
                </div>
                <div class="input-field col s12 m6 xl6">
                    <i class="icon-contact_phone prefix"></i>
                    <input type="text" name="telefono_cliente" id="telefono_cliente" value="+582511234567" disabled>
                    <label for="telefono_cliente">Teléfono del Cliente</label>
                </div>
                <div class="input-field col s12 m6 xl6">
                    <i class="icon-person prefix"></i>
                    <input type="text" name="representante_cliente" id="representante_cliente" value="Pedro Perez" disabled>
                    <label for="representante_cliente">Representante</label>
                </div>
                <div class="input-field col s12 m6 center-align">
                    <a href="#!" class="btn blue waves-effect waves-light col s12" id="modify">
                        <i class="icon-update right"></i>
                        Modificar
                    </a>
                </div>
                <div class="input-field col s12 m6 center-align">
                    <a href="#!" class="btn red waves-effect waves-light col s12" id="delete">
                        <i class="icon-delete right"></i>
                        Eliminar
                    </a>                
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