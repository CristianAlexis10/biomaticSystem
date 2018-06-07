<?php
	class ProjectsController{
		private $master;
		private $doizer;
	 	function __CONSTRUCT(){
	 		$this->master =  MasterModel();
	 		$this->doizer = new DoizerController;
	 	}
		function newProject(){
				$data[5]="BIO-".$tipo."-".$this->doizer->randAlphanum(3)."-".date("Y");
		}
	}
?>
