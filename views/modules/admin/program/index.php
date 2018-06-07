<h1 class="title">programas de formación</h1>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">programas de formacion</a></li>
    <li><a href="#tabs-2">Crear programa </a></li>
  </ul>
  <div id="tabs-1">
    <table class="datatable" id="tableUser">
      <thead>
        <tr>
          <th>nombre</th>
          <th>siglas</th>
          <th>Ficha</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($this->master->selectAll('programa_formacion') as $row) {?>
              <tr>
                <td><?php echo $row['porg_nombre'] ?></td>
                <td><?php echo $row['prog_siglas'] ?></td>
                <td><?php echo $row['id_ficha'] ?></td>
                <td>
                    <a href="#" onclick="eliminarFicha(<?php echo $row['prog_codigo']?>)"> Eliminar</a>
                 </td>
              </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>
  <div id="tabs-2">
    <form id="createFicha" class="form">
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="nameProject">nombre del programa:</label>
        <input type="text" id="nameFicha">
      </div>
        <div class="wrap--form">
        <label for="dateProject">Siglas del programa:</label>
        <input type="text" id="siglas">
      </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="fichaProject"> numero de ficha:</label>
        <input type="text" id="fichaProject">
      </div>
      </div>
      <input type="submit" value="registrar" class="btn--form">
    </form>
  </div>

</div>
