<?php
class AuthController{
  private $master;
  function __CONSTRUCT(){
    $this->master =  MasterModel();
  }
  function logIn(){
    $email = $_POST['user'];
    $pass = $_POST['pass'];
    if ($email!="" && $email!=" " && $pass !=  "" && $pass !=  " ") {
      $issetUser= $this->master->selectAllBy("usuario",array("usu_correo",$email));
      if ($issetUser!=array()) {
          if ($issetUser['user_estado']=="Activo") {
            $dataAcesso = $this->master->selectAllBy("usuario",array("usu_codigo",$issetUser['usu_codigo']));
            if (password_verify($pass,$dataAcesso['acc_contra'])) {
                $_SESSION['USER']['ID']=$issetUser['usu_codigo'];
                $_SESSION['USER']['NAME']=$issetUser['usu_nombre'];
                $_SESSION['USER']['LAST_NAME']=$issetUser['usu_apellido'];
                $_SESSION['USER']['ROL']=$issetUser['usu_rol'];
                if ($_SESSION['USER']['ROL']==1) {
                  echo json_encode("admin");
                }else{
                  echo json_encode("user");
                }
            }else{
              echo json_encode("La contraseña es incorrecta.");
            }
          }else{
            echo json_encode("Usuario Inactivado.");
          }
      }else{
        echo json_encode("Este Usuario no existe.");
      }
    }else{
      echo json_encode("Los campos son requeridos.");
    }

  }
}
?>
