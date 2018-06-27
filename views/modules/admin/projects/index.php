<h1 class="title">gestionar proyectos</h1>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">proyectos</a></li>
    <li><a href="#tabs-2">Crear proyecto</a></li>
  </ul>
  <div id="tabs-1">
    <table class="datatable" id="tableUser">
      <thead>
        <tr>
          <th>nombre</th>
          <th>fecha inicio</th>
          <th>programa de formacion</th>
          <th>Tipo</th>
          <th>codigo</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($this->master->procedure->NPRAll("saberProyectos") as $row) {?>
            <tr>
              <td><?php echo $row['pro_nombre']?></td>
              <td><?php echo $row['pro_inicio']?></td>
              <td><?php echo $row['prog_siglas']?></td>
              <td><?php echo utf8_encode($row['tip_pro_nombre'])?></td>
              <td><?php echo $row['pro_serial']?></td>
              <td> <a href="ver-proyecto-<?php echo $row['pro_codigo']?>">Ver</a> </td>
          <?php } ?>
        </tr>
      </tbody>
    </table>
  </div>
  <div id="tabs-2">
    <form id="createProject" class="form">
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="nameProject">nombre del projecto:</label>
        <input type="text" id="nameProject">
      </div>
        <div class="wrap--form">
        <label for="dateProject">fecha inicio:</label>
        <input type="date" id="dateProject">
      </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="fichaProject">ficha:</label>
        <select  id="fichaProject" >
            <?php
              foreach ($this->master->selectAll('programa_formacion') as $row) {
                echo "<option value='".$row['prog_codigo']."'>".$row['porg_nombre']."</option>";
              }
            ?>
        </select>
      </div>
        <div class="wrap--form">
        <label for="fichaProject">Tipo:</label>
        <select  id="tipoPro" >
            <?php
              foreach ($this->master->selectAll('tipo_proyecto') as $row) {
                echo "<option value='".$row['tip_pro_codigo']."'>".utf8_encode($row['tip_pro_nombre'])."</option>";
              }
            ?>
        </select>
      </div>
      <div class="wrap--form">
      <label for="grupo">Grupo encargado:</label>
      <select  id="grupo" >
          <?php
            foreach ($this->master->selectAll('grupos') as $row) {
              echo "<option value='".$row['gru_codigo']."'>".$row['gru_nombre']."</option>";
            }
          ?>
      </sel
      </div>
      <input type="submit" value="registrar" class="btn--form">
    </form>
  </div>

</div>
