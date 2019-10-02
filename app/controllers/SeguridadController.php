<?php
	class SeguridadController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Seguridad/Seguridad');
		}

		public function bitacora() {
			$this->view('Seguridad/Bitacora');
		}
	}
?>