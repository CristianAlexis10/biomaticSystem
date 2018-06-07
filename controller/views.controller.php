<?php
	class ViewsController{
		private $master;
		private $doizer;
	 	function __CONSTRUCT(){
	 		$this->master =  MasterModel();
	 		$this->doizer = new DoizerController;
	 	}
		function main(){
			require_once "views/modules/index.php";
		}
		function users(){
			if (isset($_SESSION['USER']['ROL']) && $_SESSION['USER']['ROL'] == 1) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/user/user.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function profileAdmin(){
			if (isset($_SESSION['USER']['ROL']) && $_SESSION['USER']['ROL'] == 1) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/profile.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function groups(){
			if (isset($_SESSION['USER']['ROL'])) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/groups/index.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function projects(){
			if (isset($_SESSION['USER']['ROL'])) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/projects/index.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function program(){
			if (isset($_SESSION['USER']['ROL'])) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/program/index.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
	}
?>
