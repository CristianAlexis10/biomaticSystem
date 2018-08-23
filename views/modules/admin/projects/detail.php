<?php
$data = $this->master->selectBy("proyecto",array("pro_codigo",$_GET['data']));
$_SESSION['proyecto_seleccionado']=$_GET['data'];
?>
<h1 class="title"><?php echo $data['pro_nombre']?></h1>
<div class="wrap--grid">
  <div class="content--grid"><a href="actas-reunion">Acta de reunion</a></div>
  <div class="content--grid"><a href="listas-asistencia">Lista de asistencia</a></div>
  <div class="content--grid"><a href="informes-investigacion">Informes de investigación</a></div>
  <div class="content--grid"><a href="publicaciones">Publicaciones de la investigación</a></div>
  <div class="content--grid"><a href="articulos-estudio">Articulos de estudio</a></div>
  <div class="content--grid"><a href="compras-contrataciones">Compras y contrataciones</a></div>
  <div class="content--grid"><a href="aliados">Aliados</a></div>
  <div class="content--grid"><a href="aprendices">Aprendices</a></div>
  <div class="content--grid"><a href="estadisticas">Estadisticas</a></div>
</div>
