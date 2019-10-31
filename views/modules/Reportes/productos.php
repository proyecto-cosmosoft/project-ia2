<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Reporte Productos</title>
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
          <h2 class="name"><?php echo date('d/m/Y');?></h2>
          
        </div>
        <div id="invoice">
        <?php if (empty($allProducto)){ ?>
      <h2 class="center-align">No Hay Ningún Producto Registrado Aún.</h2>
      <?php }else ?>
          <h1>Productos</h1>
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">COD</th>
            <th class="desc">PRODUCTO</th>
            <th class="unit">TIPO</th>
            <th class="qty">MODELO</th>
            <th class="unit">CANT DISP</th>
            <th class="total">PRECIO</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($allProducto as $producto): ?>
          <tr>
            <td class="no"><?php echo $producto->codigo_producto?></td>
            <td class="desc">
              <h3><?php echo $producto->nombre_producto?></h3>
            <?php echo $producto->descripcion_producto?></td>
            <td class="unit"><?php echo $producto->tipo_producto?></td>
            <td class="qty"><?php echo $producto->modelo_producto?></td>
            <td class="unit"><?php echo $producto->stock_producto?></td>
            <td class="total"><?php echo $producto->precio_producto?></td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
      
    </main>
    <footer>
      Si Desea algun producto de la Lista contactar con la empresa o visita nuestras redes sociales.
      Feliz Día
    </footer>
  </body>
</html>