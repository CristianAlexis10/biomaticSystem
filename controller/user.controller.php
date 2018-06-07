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
  function createUser(){
    $data = $_POST['user'];
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
      $password = $this->doizer->validateSecurityPassword($data[6]);
        if (is_array($password)) {
          $result = $this->master->procedure->NRP("crearUsuario",array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],"Activo"));
          if ($result==1) {
            $token = $this->doizer->randAlphanum(50);
            $data = $this->master->selectBy("usuario",array("usu_correo",$data[4]));
            $result = $this->master->procedure->NRP("crearAcceso",array($token,$data['usu_codigo'],$password[1]));
            if ($result==1) {
              echo json_encode(true);
            }else{
              echo json_encode("ocurrio un error al registar acceso: ".$this->doizer->knowError($result));
            }
          }else{
            echo json_encode("ocurrio un error al registar usuario: ".$result);
          }
        }else{
          echo json_encode("La contraseña no  cumple con los requisitos: ".$password);
        }
    }else{
      echo json_encode("Formato del correo no valido.");
    }
  }
  function update(){
    $data = $_POST['user'];
    $i = 0;
    foreach ($data as $input) {
      if (!$i==1 || !$i== 3 ) {
        if ($data[$i]=='') {
          echo json_encode('Campos vacios');
          return ;
        }
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
        $result = $this->master->procedure->NRP("modificarTodoUsuario",array($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$_SESSION['USER_UPDATE']));
        if ($result==1) {
           echo json_encode(true);
        }else{
          echo json_encode("Error al modificar: ".$this->doizer->knowError($result));
        }
    }else{
      echo json_encode("Formato del correo no valido.");
    }
  }
  function updateProfile(){
    $data = $_POST['user'];
    $i = 0;
    foreach ($data as $input) {
      if (!$i==1 || !$i== 3 ) {
        if ($data[$i]=='') {
          echo json_encode('Campos vacios');
          return ;
        }
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
        $result = $this->master->procedure->NRP("editarPerfil",array($_SESSION['USER_UPDATE'],$data[0],$data[1],$data[2],$data[3],$data[4]));
        if ($result==1) {
          $_SESSION['USER']['NAME']=$data[0];
          $_SESSION['USER']['LAST_NAME']=$data[2];
           echo json_encode(true);
        }else{
          echo json_encode("Error al modificar: ".$this->doizer->knowError($result));
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
  function updatePassword(){
    $data = $_POST['data'];
    $dataReal = $this->master->selectBy("acceso",array("usu_codigo",$_SESSION['USER']['ID']));
if (password_verify($data[0],$dataReal['acc_contra'])) {
  $password = $this->doizer->validateSecurityPassword($data[1]);
  if (is_array($password)) {
      $result = $this->master->procedure->NRP("modificarAcceso",array($_SESSION['USER']['ID'],$password[1]));
      if ($result==true) {
         echo json_encode(true);
      }else{
        echo json_encode($this->doizer->knowError($result));
      }
  }else{
    echo json_encode($password);
  }
}else{
  echo json_encode("la contraseña actual no es valida.");
}

  }
}
?>
