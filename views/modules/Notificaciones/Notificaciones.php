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
    <title>Notificaciones - Inversiones A2</title>

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
                </div>
            </div>
        </div>

<!--Notificaciones de Pedidos-->
<div class="section">
            <div class="container">
                <div class="row">
                <?php if (empty($allNoti)){ ?>
                        <h2 class="center-align">Ningún Entrega Pendiente.</h2>
                    
                    <!-- Cards -->
                <?php }else foreach ($allNoti as $pedido): ?>
                <?php if($pedido->dia_faltante <= 5 && $pedido->status_pedido == 'En Proceso' || $pedido->status_pedido == 'Terminado' || $pedido->status_pedido == 'En proceso' || $pedido->status_pedido == 'terminado'):?>
                        <!-- Sí faltan 5  -->

                    <div class="col s12 m6 l6 xl6">
                        <div class="card grey darken-4">
                            <div class="card-image">
                                <a class="pulse btn-floating halfway-fab waves-effect waves-light lime accent-4"><i class="icon-notifications_active"></i></a>
                            </div>
                            <div class="card-content white-text">
                                <span class="card-title"><b><h5>Pedido Pendiente</b></h5></span>
                                <p><h8><b>CF: </b><?php echo $pedido->codigo_factura?></h8></p>
                                <p><h8><b>Cliente: </b><?php echo $pedido->nombre_cliente?></h8></p>
                                <p><h8><b>Fecha de Pedido: </b> <?php echo $pedido->fecha_factura?></h8></p>
                                <p><h8><b>Esta: </b>a <?php echo $pedido->dia_faltante?> Día(s) de la Entrega</h8></p>
                                <p><h8><b>Fecha de Entrega: </b> <?php echo $pedido->fecha_entrega_pedido ?></h8></p>
                                
                                
                            </div>
                            <div class="card-action">
                                <a href="<?php #para Yohnncito?>">Pedido Entregado</a>
                                <p><a href="<?php echo Helpers::url('Notificacion','detailsPedido')."/".$pedido->codigo_factura?>">Detalles de Pedido</a></p>
                            </div>
                        </div>
                    </div>
                <?php elseif($pedido->dia_faltante > 5 || $pedido->status_pedido == 'Entregado' || $pedido->status_pedido == 'entregado'): ?>
                <?php endif; ?>

              
                    
                    
             
               
            <?php endforeach;?>
                    
                </div>
            </div>
        </div>


<!--Notificaciones de Producto Agotado-->
<div class="section">
            <div class="container">
                <div class="row">
                   <?php if (empty($allProdu)){ ?>
                        <h2 class="center-align">Ningún Producto Agotado.</h2>
                    

                    <?php }else foreach ($allProdu as $producto): ?>
                    
                    <?php if($producto->stock_producto <= $producto->stock_min_producto):?>
                    
                    
                    <div class="col s12 m6 l6 xl6">
                        <div class="card grey darken-4">
                            <div class="card-image">
                                <a class="pulse btn-floating halfway-fab waves-effect waves-light lime accent-4"><i class="icon-notifications_active"></i></a>
                            </div>
                            <div class="card-content white-text">
                                <span class="card-title"><b><h5>Producto por Agotarse</b></h5></span>
                                <p><h8><b>Producto:</b>
                                    <?php echo $producto->nombre_producto?></h8></p>
                                <p><h8><b>Cantidad Actual:</b> 
                                    <?php echo $producto->stock_producto?></h8></p>
                            </div>
                            <div class="card-action">
                                <a href="">Recargar Stock</a>
                                <p><a href="<?php echo Helpers::url('Notificacion','detailsProducto')."/".$producto->codigo_producto?>">Detalles de Producto</a></p>
                            </div>
                        </div>
                    </div>
                
                    <?php endif;?>
                     <?php endforeach;?>
                </div>
            </div>
        </div>

<!--Notificaciones de Cliente por Contactar-->

<div class="section">
            <div class="container">
                <div class="row">
                     <?php if (empty($allCliente)){ ?>
                        <h2 class="center-align">Ningún Cliente por Contactar.</h2>
                   
                    
                    <!-- Cards -->
                    <?php }else foreach ($allCliente as $cliente): ?>
                    <?php if($cliente->fecha_alerta == $cliente->fecha_hoy):?>
                    <div class="col s12 m6 l6 xl6">
                        <div class="card grey darken-4">
                            <div class="card-image">
                                <a class="pulse btn-floating halfway-fab waves-effect waves-light lime accent-4"><i class="icon-notifications_active"></i></a>
                            </div>
                            <div class="card-content white-text">
                                <span class="card-title"><b><h5>Cliente Pendiente</b></h5></span>
                                <input type="hidden" name="" value="<?php echo $cliente->tipo_documento_cliente?>">
                                <p><h8><b>Cliente: </b><?php echo $cliente->nombre_cliente?></h8></p>
                                <p><h8><b>Representante: </b> <?php echo $cliente->representante_cliente ?></h8></p>
                                <p><h8><b>N° Telefonico: </b> <?php echo $cliente->telefono_cliente ?></h8></p>
                                <p><h8><b>Fecha Consulta: </b><?php echo $cliente->fecha_pedido?></h8></p>
                            </div>
                            <div class="card-action">
                                <a href="">Llamado</a>
                                <p><a href="<?php echo Helpers::url('Notificacion','detailsCliente')."/".$cliente->cedula_cliente?>">Detalles Consulta</a></p>
                            </div>
                        </div>
                    </div>

                <?php else: ?>
                    
                <?php endif; ?>



            <?php endforeach;?>
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
</body>
</html>