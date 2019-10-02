<?php
	class ArticuloController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Articulos/Articulos');
		}
		
		public function create() {
			$this->view('Articulos/Articulos.Registrar');
		}


		public function getAll() {
			$this->view('Articulos/Articulos.Consultar');
		}

		public function register() {

		}

		public function update() {

		}

		public function delete() {

		}
	}
?>