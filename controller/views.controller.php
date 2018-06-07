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
	}
?>
