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
    <title> - Inversiones A2</title>
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
                    <a href="<?php echo Helpers::url('Notificacion','index'); ?>" class="breadcrumb">Notificaciones</a> 

                    <?php foreach ($result as $idproducto): ?>
                    <a href="<?php echo Helpers::url('Notificacion','detailsProducto').'/'.$idproducto->codigo_producto; ?>" class="breadcrumb">Detalles de Notificación</a>
                </div>
            </div>
        </div>

                
                    <div class="col s12 m6 l6 xl6">
                        <div class="container">
                            
                     
                    <form action="" method="get" class="col s12">
                    <div class="row">
                    <h3 class="center-align black-text">Detalles del Producto</h3>
                    </div>
                    <div class="row">
                             
                             <div class="col s12 m3 xl3 input-field">
                                <h7><b>CD Producto: </b><?php echo $idproducto->codigo_producto?></h7>
                             </div>
                             <div class="col s12 m3 xl3 input-field">
                                <h7><b>Nombre: </b><?php echo $idproducto->nombre_producto?></h7>
                             </div>
                             <div class="col s12 m6 xl6 input-field">
                                <h7><b>Descripción: </b><?php echo $idproducto->codigo_producto?></h7>
                             </div>
                             <div class="col s12 m3 xl3 input-field">
                                <h7><b>Tipo: </b><?php echo $idproducto->tipo_producto?></h7>
                             </div>
                             <div class="col s12 m3 xl3 input-field">
                                <h7><b>Modelo: </b><?php echo $idproducto->modelo_producto?></h7>
                             </div>
                             <div class="col s12 m3 xl3 input-field">
                                <h7><b>Costo: </b><?php echo $idproducto->costo_producto?></h7>
                             </div>
                             <div class="col s12 m3 xl3 input-field">
                                <h7><b>Precio: </b><?php echo $idproducto->precio_producto?></h7>
                             </div>
                             <div class="col s12 m12 xl12 input-field">
                                <h7><b>Cantidad Actual: </b><?php echo $idproducto->stock_producto?></h7>
                             </div>
                             
                
                        <div class="col s12 m6 center-align input-field">
                        <button id="entendido" class="waves-effect btn green-45deg-gradient-1 col s12" name="entendido" ><i class="icon-check right"></i>Entendido</button>
                        </div>

                        <div class="col s12 m6 center-align input-field">
                        <button id="revisar_luego" class="waves-effect btn red-45deg-gradient-1 col s12" name="revisar_luego" ><i class="icon-close right"></i>Revisaré Luego</button>
                        </div>

                        </div>
                    </form>
                    <?php endforeach;?>
                    
                        
                        </div>
                    </div>

    </main>

    <!-- Footer -->
    <?php require_once "views/layouts/footer.php"; ?>


    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/materialize.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/plugins/sweetalert.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/owner.js"></script>
</body>
</html>