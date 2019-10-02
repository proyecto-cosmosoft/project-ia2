<?php
	class ConfiguracionController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Configuracion/Configuracion');
		}
	}
?>