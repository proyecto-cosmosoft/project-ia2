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

                    <?php foreach ($result as $idcliente): ?>
                    <a href="<?php echo Helpers::url('Notificacion','detailsCliente').'/'.$idcliente->cedula_cliente; ?>" class="breadcrumb">Detalles de Notificación</a>
                </div>
            </div>
        </div>

                
                    <div class="col s12 m6 l6 xl6">
                        <div class="container">
                            
                     
                    <form action="" method="get" class="col s12">
                    <div class="row">
                    <h3 class="center-align black-text">Detalles de la Consulta</h3>
                    </div>
                    <div class="row">
                             
                             <div class="col s12 m3 xl3 input-field">
                                <h7><b>Cedula: </b><p><?php echo $idcliente->tipo_documento_cliente?><?php echo $idcliente->cedula_cliente?></p></h7>
                             </div>

                            <div class="col s12 m3 xl3 input-field">
                            <h7><b>Cliente: </b><p><?php echo $idcliente->nombre_cliente?></p></h7>
                             </div>

                            <div class="col s12 m3 xl3 input-field">
                                <h7><b>Representante: </b><p><?php echo $idcliente->representante_cliente?></p></h7>
                             </div>

                            <div class="col s12 m3 xl3 input-field">
                                <h7><b>Telefono: </b><p><?php echo $idcliente->telefono_cliente?></p></h7>
                             </div>

                             <div class="col s12 m4 xl4 input-field">
                                <h7><b>Fecha Consulta: </b><p><?php echo $idcliente->fecha_pedido?></p></h7>
                             </div>

                             <div class="col s12 m8 xl8 input-field">
                                <h7><b>Descripción Consulta: </b><p><?php echo $idcliente->descripcion_pedido?></p></h7>
                             </div>
                                                         
                
                        <div class="col s12 m6 center-align input-field">
                        <button id="factura" class="waves-effect btn green-45deg-gradient-1 col s12" name="factura" ><i class="icon-check right"></i>Facturar</button>
                        </div>

                        <div class="col s12 m6 center-align input-field">
                        <button id="cancela" class="waves-effect btn red-45deg-gradient-1 col s12" name="cancela" ><i class="icon-close right"></i>Cancelar</button>
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