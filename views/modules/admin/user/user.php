<h1 class="title">gestionar usuarios</h1>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">usuarios</a></li>
    <li><a href="#tabs-2">Crear usuarios</a></li>
  </ul>
  <div id="tabs-1">
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
          foreach ($this->master->selectAll("usuario") as $row) {?>
            <tr>
              <td><?php echo $row['usu_nombre']?></td>
              <td><?php echo $row['usu_apellido']?></td>
              <td><?php echo $row['usu_correo']?></td>
              <td><?php echo $row['usu_estado']?></td>
              <td class="actions">
                <a href="editar-usuario-<?php echo $row['usu_codigo']?>"><i class="fas fa-user-edit"></i></a>
                <?php if ($row['usu_estado']=="Activo") { ?>
                    <a href="#" onclick="cambiarEstado(<?php echo $row['usu_codigo']?>,'Inactivo')">Inactivar</a>
                <?php }else{ ?>
                    <a href="#" onclick="cambiarEstado(<?php echo $row['usu_codigo']?>,'Activo')">Activar</a>
                  <?php } ?>
              </td>
            </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>
  <div id="tabs-2">
    <form id="createUser" class="form">
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="nameUser">nombre:</label>
        <input type="text" id="nameUser">
      </div>
        <div class="wrap--form">
        <label for="SnameUser">segundo nombre:</label>
        <input type="text" id="SnameUser">
      </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="lastnameUser">apellido</label>
        <input type="text" id="lastnameUser">
      </div>
        <div class="wrap--form">
        <label for="SlastnameUser">segundo apellido:</label>
        <input type="text" id="SlastnameUser">
      </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="emailUser">email</label>
          <input type="email" id="emailUser">
        </div>
        <div class="wrap--form">
          <label for="nivelUser">nivel educativo:</label>
          <select id="nivelUser">
            <option value="1">tecnico</option>
            <option value="1">tecnologo</option>
            <option value="1">profesional</option>
            <option value="2">especialista</option>
            <option value="2">maestria</option>
            <option value="2">doctorado</option>
          </select>
        </div>
        <div class="wrap--form">
          <label for="rolUser">rol</label>
          <select id="rolUser">
            <option value="1">administrador</option>
            <option value="2">investigador</option>
          </select>
        </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="passUser">contraseña</label>
        <input type="password" id="passUser">
      </div>
        <div class="wrap--form">
        <label for="repPassUser">repetir contraseña</label>
        <input type="password" id="repPassUser">
      </div>
      </div>
      <input type="submit" value="registrar" class="btn--form">
    </form>
  </div>

</div>
