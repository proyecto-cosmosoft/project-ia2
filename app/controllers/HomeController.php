<?php
	class HomeController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Sistema/Home');
		}

		public function account() {
			$this->view('Sistema/Profile');
		}

		public function settings() {

		}

		public function getAll() {
			
		}
	}
?>