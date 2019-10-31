<?php
	class FacturaController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$factura = new Factura(); // Instancia un objeto
            $allFactura = $factura->getFactura();
			$this->view('Facturacion/Facturacion.Listado',
				['allFactura' => $allFactura]);
		}


		public function reportesIndex() {

				//require_once(BASE_URL . "vendor/autoload.php");
				//$mpdf = new \Mpdf\Mpdf();
				




			$this->view('Reportes/Reportes');
		}

		public function invoice() { // Metodo provisional que crea una factura
			$this->view('Facturacion/Invoice');
		}

		public function createInvoice() { // Crear una nueva factura

		}

		public function getAllPedido() {
			$pedido = new Factura(); // Instancia un objeto
            $allPedido = $pedido->getPedidos();

			$this->view('Reportes/pedidos',['allPedido' => $allPedido]);
		}

		public function getAllProducto() {
			$producto = new Factura(); // Instancia un objeto
            $allProducto = $producto->getProductos();

			$this->view('Reportes/productos',['allProducto' => $allProducto]);
		}

		
		
		public function facturaById() {
			if (isset($_GET["id"])) {
			$factura = new Factura();
          	$id=$_GET["id"];

          	$factura->setCodigoFactura($id);
          	$factura_find = $factura->getFacturaId($id);
          	$servicio_find = $factura->getFacturaServicioById($id);
          	$producto_find=$factura->getFacturaProductoById($id);
          	
          	$this->view('Facturacion/Invoice', 
          		['servicio' => $servicio_find,
          		'producto' => $producto_find,
          		'factura' => $factura_find
          	]);
			
			}
		}



	}
?>