<h1 class="title"><?php echo $datagrupo['gru_nombre'] ?></h1>
<p>fecha de creación: <?php echo $datagrupo['gru_fecha_resgistro'] ?> </p>
<p>descripción del grupo: <?php echo $datagrupo['gru_descripcion'] ?> </p>
<div class="content--miembro">
  <p class="title--detail">miembros del grupo</p>
  <table class="table--detail">
    <thead class="header--detail">
      <tr>
        <th>nombre</th>
        <th>apellido</th>
        <th>correo</th>
        <th>Fecha de unión</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->master->procedure->PRByAll("saberIntegrantesGrupos",array($datagrupo['gru_codigo'])) as $row) {?>
          <tr>
            <td><?php echo $row['usu_nombre']?></td>
            <td><?php echo $row['usu_apellido']?></td>
            <td><?php echo $row['usu_correo']?></td>
            <td><?php echo $row['fecha_ingreso']?></td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<div class="content--proyecto">
  <p class="title--detail">Proyectos asignados</p>
  <table class="table--detail">
    <thead class="header--detail">
      <tr>
        <th>nombre</th>
        <th>Tipo</th>
        <th>Fecha De inicio</th>
        <th>Serial</th>
        <th>ver</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->master->procedure->PRByAll("saberProyectosDeGrupo",array($datagrupo['gru_codigo'])) as $row) {?>
          <tr>
            <td><?php echo $row['pro_nombre']?></td>
            <td><?php echo utf8_encode($row['tip_pro_nombre'])?></td>
            <td><?php echo $row['pro_inicio']?></td>
            <td><?php echo $row['pro_serial']?></td>
            <td> <a href="ver-proyecto-<?php echo $row['gru_codigo']?>">ver</a> </td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
