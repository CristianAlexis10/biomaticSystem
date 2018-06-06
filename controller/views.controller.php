<?php
	class ViewsController{
		private $master;
		private $doizer;
	 	function __CONSTRUCT(){
	 		$this->master =  MasterModel();
	 		$this->doizer = new DoizerController;
	 	}
		function main(){
			require_once "views/include/scope.header.php";
			require_once "views/modules/index.php";
			require_once "views/include/scope.footer.php";
		}
	}
?>
