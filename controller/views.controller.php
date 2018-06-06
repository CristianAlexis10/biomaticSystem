<?php
	class ViewsController{
		private $master;
		// private $doizer;
	 	function __CONSTRUCT(){
	 		$this->master =  MasterModel();
	 		// $this->doizer = new DoizerController;
	 	}
		function main(){
			$res = $this->master->selectAll("user");
			echo json_encode(print_r($res));
		}
	}
?>
