<?php
class ExportController{
  private $master;
  function __CONSTRUCT(){
    $this->master =  MasterModel();
  }
  function projects(){
  $result = $this->master->procedure->NPRAll("saberProyectosEX");
  echo json_encode($result);
}
}
?>
