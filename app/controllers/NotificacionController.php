<?php
	class NotificacionController extends BaseController {
		public function __construct() {
			parent::__construct();
		}


		public function index() {
			$noti = new Notificacion(); // Instancia un objeto
            $allNoti = $noti->getPedido();
            $allProdu = $noti->getProducto(); 
            
			$this->view('Notificaciones/Notificaciones',['allNoti' => $allNoti, 'allProdu' => $allProdu]);
        	
		
		}

		
			//Pedidos
		public function detailsPedido() {
			if (isset($_GET["id"])) {
			
          	$details = new Notificacion();

          	$id =$_GET["id"];
          	$details->setCodigoFactura($id);

          	$result = $details->getPedidoById($id);
            $this->view('Notificaciones/Notificaciones.Consulta',['result' => $result]);
			
			}
		}


			//Productos
		public function detailsProducto() {
			
			if (isset($_GET["id"])) {
			
          	$details = new Notificacion();

          	$id =$_GET["id"];
          	$details->setCodigoProducto($id);

          	$result = $details->getProductoById($id);
            $this->view('Notificaciones/Notificaciones.Producto',['result' => $result]);
			
			}
		}

			/*/Clientes
		public function detailsCliente() {
			
			if (isset($_GET["id"])) {
			
          	$details = new Notificacion();

          	$id =$_GET["id"];
          	$details->setCedulaCliente($id);

          	$result = $details->getClienteById($id);
            $this->view('Notificaciones/Notificaciones.Cliente',['result' => $result]);
			
			}
		}*/
		


	}
?>