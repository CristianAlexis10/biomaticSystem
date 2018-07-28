<?php $data = $this->master->selectBy("actas",array("id_acta",$_GET['data']))?>

<!-- diseño solo poner  echo $data['aca_nombre_campo_en_la_base_de_datos'] -->
<?php echo $data['nombre_comite']?>