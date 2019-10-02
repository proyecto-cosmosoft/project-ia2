<?php
	class UsuarioController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Usuarios/Usuarios');
		}

		public function create() {
			$this->view('Usuarios/Usuarios.Registrar');
		}

		public function getAll() {
			$this->view('Usuarios/Usuarios.Consultar');
		}

		public function register() {

		}

		public function details() {
			$this->view('Usuarios/Usuarios.Detalles');
		}

		public function update() {

		}

		public function delete() {

		}
	}
?>