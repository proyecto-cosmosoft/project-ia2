<?php
	class MantenimientoController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Mantenimiento/Mantenimiento');
		}

		public function createBackup() {

		}

		public function systemRestore() {
			
		}
	}
?>