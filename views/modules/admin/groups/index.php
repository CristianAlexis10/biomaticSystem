<h1 class="title">gestionar grupos</h1>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">grupo</a></li>
    <li><a href="#tabs-2">Crear grupo</a></li>
  </ul>
  <div id="tabs-1">
    <table class="datatable" id="tableUser">
      <thead>
        <tr>
          <th>Nº</th>
          <th>nombre</th>
          <th>descripcion</th>
          <th>fecha de registro</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $i = 1;
         foreach ($this->master->selectAll("grupos") as $row) {?>
          <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row['gru_nombre'] ;?></td>
            <td><?php echo $row['gru_descripcion'] ;?></td>
            <td><?php echo $row['gru_fecha_resgistro'] ;?></td>
            <td>
              <a href="ver-grupo-<?php echo $row['gru_codigo'] ?>">Ver</a>
              <a href="#" onclick="eliminarGrupo(<?php echo $row['gru_codigo'] ?>)">Eliminar</a> 
            </td>
          </tr>
      <?php $i++; }?>
      </tbody>
    </table>
  </div>
  <div id="tabs-2">
    <form id="createGroup" class="form">
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="nameGroup">nombre del grupo</label>
        <input type="text" id="nameGroup">
        </div>
        <div class="wrap--form">
        <label for="descGroup">descripcion</label>
        <textarea id="descGroup"></textarea>
        </div>
      </div>
      <input type="submit" value="registrar" class="btn--form">
    </form>
  </div>

</div>
