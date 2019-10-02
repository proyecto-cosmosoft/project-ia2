<?php
	class AuthController extends BaseController {
		public function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->view('Auth/Login');
		}

		public function login() {

		}

		public function logout() {

		}

		public function passwordRestore() {
			
		}
	}
?>