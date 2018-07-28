<?php
class ActasController{
    private $master;
    private $doizer;
    function __CONSTRUCT(){
      $this->master =  MasterModel();
      $this->doizer =  new DoizerController;
    }
    function crear(){
      $datReal = array();
      $datReal[]=$_SESSION['proyecto_seleccionado'];
      foreach($_POST['data'] as $row){
        $datReal[] = $row;
      }
      $result = $this->master->insert("actas",$datReal,array("id_acta"));
      if($result ==1){
        echo json_encode(true);
      }else{
        echo json_encode($this->doizer->knowError($result));
      }
    }
}
?>