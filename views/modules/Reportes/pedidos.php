<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Reporte Pedidos</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?php echo BASE_URL; ?>assets/images/brand-logo.jpg">
      </div>
      <div id="company">
        <h1 class="name">Inversiones A2</h1>
        <div>Carrera 18 esp. Calle 36 C.C. San Juan Local N°7 </div>
        <div>04145030244 - 04149517382</div>
        <div>@A2VZLA</div>
        <div>inversionesa2@gmail.com</div>
      </div>
      </div>
    </header>
    <main>
     <div id="details" class="clearfix">
        <div id="client">
          <div class="to">REPORTE A FECHA:</div>
          <h2 class="name">
            <?php echo date('d/m/Y');?></h2>
        </div>
        <div id="invoice">
          <h1>Pedidos</h1>
        </div>
      </div>
      <?php if (empty($allPedido)){ ?>
      <h2 class="center-align">No Hay Ningún Pedido Registrado Aún.</h2>
        <?php }else ?>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">COD</th>
            <th class="desc">CLIENTE</th>
            <th class="unit">ENTREGA</th>
            <th class="qty">PEDIDO</th>
            <th class="total">STATUS</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($allPedido as $pedido): ?>
            <?php if($pedido->status_pedido == 'Terminado' || $pedido->status_pedido == 'En proceso' || $pedido->status_pedido == 'terminado' || $pedido->status_pedido == 'en proceso' || $pedido->status_pedido == 'En Proceso' ):?>
          <tr>
            <td class="no"><?php echo $pedido->codigo_pedido?></td>
            <td class="desc">
              <h3><?php echo $pedido->nombre_cliente?></h3>
            <?php echo $pedido->representante_cliente?> - <?php echo $pedido->telefono_cliente?></td>
            <td class="unit"><?php echo date("d/m/Y", strtotime($pedido->fecha_entrega_pedido))?></td>
            <td class="qty"><?php echo $pedido->descripcion_pedido?></td>
            <td class="total"><?php echo $pedido->status_pedido?></td>
            
          </tr>
          <?php elseif($pedido->status_pedido == 'Entregado' || $pedido->status_pedido == 'entregado'): ?>
                <?php endif; ?>
          
          <?php endforeach;?>
          
        </tbody>
      </table>
      
    </main>
    <footer>
      <div id="notices">
        <div>Advertencia:</div>
        <div class="notice">En la siguiente lista de pedidos solo se muestran LOS PEDIDOS QUE AÚN NO HAN SIDO ENTREGADOS</div>
      </div>
    </footer>
  </body>
</html>