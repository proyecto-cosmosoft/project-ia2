<?php
	class PedidoController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Pedidos/Pedidos');
		}	

		public function create() {
			$this->view('Pedidos/Pedidos.Registrar');
		}

		public function getAll() {
			$this->view('Pedidos/Pedidos.Consultar');
		}

		public function register() {

		}

		public function details() {
			$this->view('Pedidos/Pedidos.Detalles');
		}

		public function update() {

		}

		public function delete() {

		}
	}
?>