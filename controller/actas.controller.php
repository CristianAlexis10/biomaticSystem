<?php
class ActasController{
    private $master;
    private $doizer;
    function __CONSTRUCT(){
      $this->master =  MasterModel();
      $this->doizer =  new DoizerController;
    }
}
?>