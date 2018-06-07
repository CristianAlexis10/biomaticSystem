<?php
class UserController{
  private $master;
  private $doizer;
  function __CONSTRUCT(){
    $this->master =  MasterModel();
    $this->doizer =  new DoizerController;
  }
  function main(){
    if (isset($_SESSION['USER']['ROL']) && $_SESSION['USER']['ROL'] == 2) {
      require_once "views/include/scope.header.php";
      require_once "views/include/scope.menutop.php";
      require_once "views/include/scope.navigator.php";
      require_once "views/modules/user/index.php";
      require_once "views/include/scope.footer.php";
    }else{
      session_destroy();
      header("Location: inicio");
    }
  }
  function newUser(){
    $data = $_POST['data'];
    $pass = $_POST['pass'];
    $data[] = "Activo";
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
    if ($this->doizer->validateEmail($data[4])==true) {
        if (is_array($this->doizer->validateSecurityPassword($pass))) {
          $result = $master->procedure->NPR("crearUsuario",$data);
          if ($result==1) {
            echo json_encode(true);
          }else{
            echo json_encode("ocurrio un error al registar usuario".$this->doizer->knowError($result));
          }
        }else{
          echo json_encode("La contraseña no  cumple con los requisitos.");
        }
    }else{
      echo json_encode("Formato del correo no valido.");
    }
  }

  function changeStatus(){
    $user = $_POST['user'];
    $estado = $_POST['estado'];
    $result = $this->master->procedure->NPR("cambiarEstadoUsuario",array($user,$estado));
    if ($result==1) {
      echo json_encode(true);
    }else{
      echo json_encode($this->doizer->knowError($result));
    }
  }
}
?>
