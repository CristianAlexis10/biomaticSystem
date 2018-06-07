<?php
class GroupsController{
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
    $result = $this->master->procedure->NRP("crearGrupo",array($data[0],$data[1],date("Y-m-d")));
    if ($result==1) {
      $pro = $this->master->selectBy("grupos",array('gru_nombre',$data[0]));
      $_SESSION['new_grup']= $pro['gru_codigo'];
      echo json_encode(true);
    }else{
      echo json_encode($this->doizer->knowError($result));
    }
  }
  function addCollaborators(){
    $user = $_POST['user'];
    $grupo = $_POST['grupo'];
    $result = $this->master->procedure->NRP("crearUsuarioxgrupo",array($grupo,$user,date("Y-m-d")));
    if ($result==1) {
      echo json_encode(true);
    }else{
      echo json_encode($this->doizer->knowError($result));
    }
  }
}
?>
