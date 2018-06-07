<?php
class ExportController{
  private $master;
  function __CONSTRUCT(){
    $this->master =  MasterModel();
  }
  function projects(){
  $result = $this->master->procedure->NPRAll("saberProyectosEX");
  print_r($result);
  // echo $_POST['parametro1'];
}
}
?>
