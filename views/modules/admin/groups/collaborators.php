<?php if (!isset($_SESSION['new_grup'])) {
  header("Location: gestion-grupos");
}?>
<a href="finalizar-registro-grupo">Finalizar Registro</a>
<table class="datatable" id="tableUser">
  <thead>
    <tr>
      <th>nombre</th>
      <th>apellido</th>
      <th>correo</th>
      <th>estado</th>
      <th>acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($this->master->selectAll("usuario") as $row) {
        $isset = $this->master->procedure->PRByAll("ExisteUsuarioEnGrupo",array($_SESSION['new_grup'],$row['usu_codigo']))[0];
        if ($isset[0]==0 ){?>
          <tr>
            <td><?php echo $row['usu_nombre']?></td>
            <td><?php echo $row['usu_apellido']?></td>
            <td><?php echo $row['usu_correo']?></td>
            <td><?php echo $row['usu_estado']?></td>
            <td>
              <a href="#" onclick="asignar_grupo(<?php echo $row['usu_codigo']?>,<?php echo $_SESSION['new_grup']?>)">Agregar</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
  </tbody>
</table>
