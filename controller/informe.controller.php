<?php
class InformeController{
    private $master;
    private $doizer;
    function __CONSTRUCT(){
      $this->master =  MasterModel();
      $this->doizer =  new DoizerController;
    }
    function crear(){
      if(isset($_FILES['file'])){
        if($_POST['input1']!="" && $_POST['input2']!=""){
          // $rand = rand(10000,999999)*rand(10000,999999);
          $tmp_name=$_POST['input1']."-".time();
          $result = array(true,$tmp_name.$_FILES['file']['name']);
          $res = $this->master->insert("informe",array($_POST['input1'],$_POST['input2'],$result[1],$_SESSION['proyecto_seleccionado']),array("id_informe"));
          if($res==1){
            move_uploaded_file($_FILES['file']['tmp_name'],"views/assets/infrome/".$result[1]);
            $_SESSION['msn'] ="exitoso.";
            header("Location: informes-investigacion");
          }else{
            $_SESSION['msn'] =$this->doizer->knowError($res);
            header("Location: informes-investigacion");
          }
        }else{
          $_SESSION['msn'] ="los campos son necesarios";
          header("Location: informes-investigacion");
        }
      }else{
        $_SESSION['msn'] ="Selecciona un archivo por favor.";
        header("Location: informes-investigacion");
        
      }
    }    
}
?>