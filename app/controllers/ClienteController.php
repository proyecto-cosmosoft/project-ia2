<?php
	class ClienteController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Clientes/Clientes');
		}

		public function create() {
			$this->view('Clientes/Clientes.Registrar');
		}

		public function getAll() {
			$this->view('Clientes/Clientes.Consultar');
		}

		public function register() {

		}

		public function details() {
			$this->view('Clientes/Clientes.Detalles');
		}

		public function update() {

		}

		public function delete() {

		}
	}
?>