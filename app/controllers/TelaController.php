<?php
	class TelaController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Telas/Telas');
		}

		public function create() {
			$this->view('Telas/Telas.Registrar');
		}

		public function getAll() {
			$this->view('Telas/Telas.Consultar');
		}

		public function register() {

		}

		public function update() {

		}

		public function delete() {

		}
	}
?>