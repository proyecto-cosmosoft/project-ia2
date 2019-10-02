<?php
	class MaterialController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Materiales/Materiales');
		}

		public function create() {
			$this->view('Materiales/Materiales.Registrar');
		}

		public function getAll() {
			$this->view('Materiales/Materiales.Consultar');
		}

		public function register() {

		}

		public function update() {

		}

		public function delete() {

		}
	}
?>