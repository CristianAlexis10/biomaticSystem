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
				$data = $this->master->selectBy("usuario",array("usu_codigo",$_SESSION['USER']['ID']));
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/profile.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function viewUpdateUser(){
			if (isset($_SESSION['USER']['ROL']) && $_SESSION['USER']['ROL'] == 1) {
				$data = $this->master->selectBy("usuario",array("usu_codigo",$_GET['data']));
				$_SESSION['USER_UPDATE'] = $_GET['data'];
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/user/update.php";
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
		function collaborators(){
			if (isset($_SESSION['USER']['ROL'])) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/groups/collaborators.php";
				require_once "views/include/scope.footer.php";
			}else{
				session_destroy();
				header("Location: inicio");
			}
		}
		function viewGroup(){
			if (isset($_SESSION['USER']['ROL'])) {
				require_once "views/include/scope.header.php";
				require_once "views/modules/admin/groups/detail.php";
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
