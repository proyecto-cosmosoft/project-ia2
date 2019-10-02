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

                    <?php foreach ($result as $idpedido): ?>
                    <a href="<?php echo Helpers::url('Notificacion','detailsPedido').'/'.$idpedido->codigo_factura; ?>" class="breadcrumb">Detalles de Notificación</a>
                </div>
            </div>
        </div>

                
                    <div class="col s12 m6 l6 xl6">
                        <div class="container">
                            
                     
                    <form action="" method="get" class="col s12">
                    <div class="row">
                    <h3 class="center-align black-text">Detalles del Pedido</h3>
                    </div>
                    <div class="row">
                             
                             <div class="col s12 m4 xl4 input-field">
                                <h7><b>CD Pedido: </b><?php echo $idpedido->codigo_pedido?></h7>
                             </div>
                             <div class="col s12 m4 xl4 input-field">
                                <h7><b>Fecha de Pedido: </b> <?php echo $idpedido->fecha_factura?></h7> 
                             </div>
                             <div class="col s12 m4 xl4 input-field">
                                <h7><b>Fecha de Entrega: </b> <?php echo $idpedido->fecha_entrega_pedido ?></h7>
                             </div>
                             <div class="col s12 m4 xl4 input-field">
                                <h7><b>Cliente: </b><?php echo $idpedido->nombre_cliente?>
                                </h7>
                             </div>
                             <div class="col s12 m4 xl4 input-field">
                                <h7><b>Representante: </b><?php echo $idpedido->representante_cliente?></h7> 
                             </div>
                             <div class="col s12 m4 xl4 input-field">
                                <h7><b>Telefono: </b><?php echo $idpedido->telefono_cliente?></h7>
                             </div>
                             
                             <div class="col s12 m6 xl6 input-field">
                                <h7><b>Status del Pedido: </b> <?php echo $idpedido->status_pedido ?></h7>
                             </div>
                            <div class="col s12 m6 xl6 input-field">
                                <h7><b>Esta: </b>a <?php echo $idpedido->dia_faltante ?> día(s) de la entrega del pedido</h7>
                            </div>
                             <div class="col s12 m12 xl12 input-field">
                                <p><h7><b>Descripción del Pedido: </b> <?php echo $idpedido->descripcion_pedido ?></h7></p> 
                             </div>
                
                        <div class="col s12 m6 center-align input-field">
                        <button id="entrega" class="waves-effect btn green-45deg-gradient-1 col s12" name="entrega" ><i class="icon-check right"></i>Entregado</button>
                        </div>

                        <div class="col s12 m6 center-align input-field">
                        <button id="cancela" class="waves-effect btn red-45deg-gradient-1 col s12" name="cancela" ><i class="icon-close right"></i>Cancelado</button>
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