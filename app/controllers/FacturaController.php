<?php
	class FacturaController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Facturacion/Facturacion');
		}

		public function getAll() {
			$this->view('Facturacion/Facturacion.Consultar');
		}

		public function register() {

		}

		public function create() {

		}

		public function update() {

		}

		public function delete() {

		}
	}
?>