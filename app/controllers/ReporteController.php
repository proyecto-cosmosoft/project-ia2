<?php
	class ReporteController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Reportes/Reportes');
		}

		public function orders() {

		}

		public function products() {

		}

		public function invoices() {
			
		}
	}
?>