<?php
	class ServicioController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Servicios/Servicios');
		}

		public function create() {
			$this->view('Servicios/Servicios.Registrar');
		}

		public function getAll() {
			$this->view('Servicios/Servicios.Consultar');
		}

		public function register() {

		}

		public function delete() {

		}
	}
?>