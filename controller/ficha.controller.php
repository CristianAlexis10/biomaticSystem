<?php
class FichaController{
  private $master;
  private $doizer;
  function __CONSTRUCT(){
    $this->master =  MasterModel();
    $this->doizer = new   doizerController();
  }
  function create(){
    $data = $_POST['data'];
    $i = 0;
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
    $result = $this->master->procedure->NRP("crearFicha",array($data[0],$data[1],$data[2]));
    if ($result==1) {
      echo json_encode(true);
    }else{
      echo json_encode($this->doizer->knowError($result));
    }
  }
  function delete(){
      $ficha = $_POST['ficha'];
      $result = $this->master->delete("programa_formacion",array('prog_codigo',$ficha));
      if ($result==1) {
        echo json_encode(true);
      }else{
        echo json_encode($this->doizer->knowError($result));
      }
  }

}
?>
