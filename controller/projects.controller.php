<?php
	class ProjectsController{
		private $master;
		private $doizer;
	 	function __CONSTRUCT(){
	 		$this->master =  MasterModel();
	 		$this->doizer = new DoizerController;
	 	}
		function create(){
			foreach ($data as $input) {
					if ($data[$i]=='') {
						echo json_encode('Campos vacios');
						return ;
					}
					if ($i==4) {

					}else{
						$result = $this->doizer->specialCharater($data[$i]);
						if ($result==false) {
							echo json_encode('los campos no deben tener caracteres especiales');
							return;
						}
					}
					$i++;
			}
			$serial_part = explode("-",$data[1]);
			$serial = "BIO-".$this->doizer->randAlphanum(3)."-".$serial_part[0];
		}
	}
?>
