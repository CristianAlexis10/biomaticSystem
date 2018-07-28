<h1 class="title">informes de investigación</h1>
<div class="container--buttons">
  <button type="button" onclick="openModal(event, 'modal')"> + Adjuntar informe</button>
</div>
<?php 
  if(isset($_SESSION['msn'] )){
    echo $_SESSION['msn'] ;
    unset($_SESSION['msn'] );
  }
?>
<table class="datatable" id="tableUser">
  <thead>
    <tr>
      <th>fecha</th>
      <th>descripción</th>
      <th>acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($this->master->selectAllBy("informe",array("id_proyecto",$_SESSION['proyecto_seleccionado'])) as $row){ ?>
        <tr>
          <td><?php echo $row['fecha']?></td>
          <td><?php echo $row['des']?></td>
          <td><a href="views/assets/asistencia/<?php echo $row['src'] ?>" download>Descargar</a></td>
        </tr>
    
    <?php  } ?>
  </tbody>
</table>
<div class="containerModal" id="modal">
  <div class="content--modal">
    <span id="closeModal" onclick="closeModal(event, 'modal')">&times;</span>
    <h1 class="titleModal">adjuntar asistencia</h1>
    <form action="subir-informe" method="post" enctype="multipart/form-data">
      <div class="wrap--form big">
        <label for="dateAssistence">fecha</label>
        <input type="date" id="datereports" name="input1">
      </div>
      <div class="wrap--form big">
        <label for="dateDecripcion">descripción</label>
        <input type="text" id="dateDecriptionReports" name="input2">
      </div>
      <input type="file" name="file" class="btn--form">
      <input type="submit" class="btn--form">
    </form>
  </div>
</div>
