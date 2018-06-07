<h1 class="title">editar  usuarios</h1>
<form id="updateUser" class="form">
  <div class="wrap--two">
    <div class="wrap--form">
    <label for="nameUserUp">nombre:</label>
    <input type="text" id="nameUserUp" value="<?php echo $data['usu_nombre']?>">
  </div>
    <div class="wrap--form">
    <label for="SnameUserUp">segundo nombre:</label>
    <input type="text" id="SnameUserUp" value="<?php echo $data['usu_nombre2']?>">
  </div>
  </div>
  <div class="wrap--two">
    <div class="wrap--form">
    <label for="lastnameUserUp">apellido</label>
    <input type="text" id="lastnameUserUp" value="<?php echo $data['usu_apellido']?>">
  </div>
    <div class="wrap--form">
    <label for="SlastnameUserUp">segundo apellido:</label>
    <input type="text" id="SlastnameUserUp" value="<?php echo $data['usu_apellido2']?>">
  </div>
  </div>
  <div class="wrap--two">
    <div class="wrap--form">
    <label for="emailUserUp">email</label>
    <input type="email" id="emailUserUp" value="<?php echo $data['usu_correo']?>">
  </div>
    <div class="wrap--form">
    <label for="rolUserUp">rol</label>
    <select id="rolUserUp">
      <?php
        if ($data['rol_id']==1) {
          echo '<option value="1" selected>administrador</option>';
          echo '<option value="2">investigador</option>';
        }else{
          echo '<option value="1">administrador</option>';
          echo '<option value="2" selected>investigador</option>';
        }
      ?>
    </select>
  </div>
  </div>
  <div class="wrap--form big">
    <label for="estadoUserUp">Estado</label>
    <select id="estadoUserUp">
      <?php
      if ($data['usu_estado']=="Activo") {
        echo '<option value="Activo" selected>Activo</option>';
        echo '<option value="Inactivo">Inactivo</option>';
      }else{
        echo '<option value="Activo">Activo</option>';
        echo '<option value="Inactivo" selected>Inactivo</option>';
      }
      ?>
    </select>
  </div>
  <input type="submit" value="Modificar" class="btn--form">
</form>
