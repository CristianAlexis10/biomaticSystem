<?php
	class ProjectsController{
		private $master;
		private $doizer;
	 	function __CONSTRUCT(){
	 		$this->master =  MasterModel();
	 		$this->doizer = new DoizerController;
	 	}
		function create(){
			$data = $_POST['data'];
			$i=0;
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
			$result = $this->master->procedure->NRP("crearProyecto",array($data[0],$data[1],$data[2],$data[3],$serial));
			if ($result==1) {
				$pro = $this->master->selectBy("proyecto",array('pro_nombre',$data[0]));
				$this->master->insert("proyectoxgrupo",array($pro['pro_codigo'],$_POST['grupo']));
				echo json_encode($result);
			}else{
				echo json_encode($this->doizer->knowError($result));
			}
		}
	}
?>
