<?php
	class ProductoController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Productos/Productos');
		}

		public function create() {
			$this->view('Productos/Productos.Registrar');
		}

		public function getAll() {
			$this->view('Productos/Productos.Consultar');
		}

		public function register() {

		}

		public function details() {
			$this->view('Productos/Productos.Detalles');
		}

		public function update() {

		}

		public function delete() {

		}
	}
?>