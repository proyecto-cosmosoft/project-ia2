<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    
    
    <title>Factura</title>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?php echo BASE_URL; ?>assets/images/brand-logo.jpg">
      </div>
      <div id="company">
      <h1 class="name">Inversiones A2</h1>
        <div>Carrera 18 esp. Calle 36 C.C San Juan Local N°7 </div>
        <div>04145030244 - 04149517382</div>
        <div>@A2VZLA</div>
        <div>inversionesa2@gmail.com</div>

      </div>
      </div>
    </header>
    <main>
      
      <?php foreach($factura as $factura): ?>
      
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Cliente:</div>
          <h2 class="name"><?php echo $factura->nombre_cliente?></h2>
          <div class="email"><?php echo $factura->representante_cliente?></div>
          <div class="address"><?php echo $factura->direccion_cliente?></div>
          
        </div>
        <div id="invoice">
          <h1>Factura:<?php echo $factura->codigo_factura?></h1>
           <div class="date">Fecha: <?php echo date('d/m/Y');?></div>
          <div class="date">Fecha de Facturación: <?php echo date("d/m/Y", strtotime($factura->fecha_factura))?></div>
          <div class="date">Fecha Entrega: <?php echo date("d/m/Y", strtotime($factura->fecha_entrega_pedido))?></div>
          <div>Codigo Pedido: <?php echo $factura->codigo_pedido?></div>
        </div>
      </div>
      <?php break;?>
      <?php endforeach;?>
      
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">COD</th>
            <th class="desc">PRODUCTO - SERVICIO</th>
            <th class="unit">PRECIO UNITARIO</th>
            <th class="qty">CANTIDAD</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>

        <?php  $suma1 = 0;?>


        <?php foreach($servicio as $servicio): ?>

        <?php if(!empty($servicio->id_servicio)):?>
        
          <tr>
            <td class="no"><?php echo $servicio->id_servicio?></td>
            <td class="desc">
              <h3><?php echo $servicio->nombre_servicio?></h3>
            <?php echo $servicio->descripcion_servicio?></td>
            <td class="unit">$<?php echo $servicio->precio_servicio?></td>
            <td class="qty"><?php echo $servicio->cantidad_prenda?> / <?php echo $servicio->cantidad_medida?></td>
            <td class="total">$<?php echo $servicio->total_servicio?></td>
          </tr> 
           <?php  $suma1 +=$servicio->total_servicio;?>

        <?php elseif($servicio->id_servicio == NULL): ?>
        <?php endif; ?>
         <?php endforeach;?> 

        total servicios  <?php echo $suma1;?>
     
      <?php  $suma2 = 0;?>
          <?php foreach($producto as $producto): ?>

           <?php if(!empty($producto->codigo_producto)):?>
          <tr>
            <td class="no"><?php echo $producto->codigo_producto?></td>
            <td class="desc">
              <h3><?php echo $producto->nombre_producto?></h3>
            <?php echo $producto->descripcion_producto?></td>
            <td class="unit">$<?php echo $producto->precio_producto?></td>
            <td class="qty"><?php echo $producto->cant_pro_pedido?></td>
            <td class="total">$<?php echo $producto->total_producto?></td>
          </tr>
          <?php  $suma2 +=$producto->total_producto;?>
          <?php elseif($producto->codigo_producto == NULL): ?>      
            <?php endif; ?>
        <?php endforeach;?> 
         total productos  <?php echo $suma2;?>
        </tbody>

        <tfoot>
          <tr>
            <!--td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>$5,200.00</td>
          </tr-->
         

         
          
           

          <tr>
            <td colspan="2"></td>
            <td colspan="2"></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">TOTAL</td>
            <td>$<?php echo $suma1+$suma2;?></td>
          </tr>
        </tfoot>

      
      </table>
      <div id="thanks">Gracias por su Compra!</div>
      <div id="notices">
        <div>Advertencia:</div>
        <div class="notice">Despues de 30 días de la fecha de entrega no nos hacemos responsable de su Compra</div>
      </div>
    </main>
    <footer>
      No Requiere Firma
    </footer>
  </body>
</html>