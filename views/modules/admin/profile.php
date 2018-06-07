<h1 class="title">editar mis datos</h1>
<form id="updateProfile" class="form">
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
  <div class="wrap--form big">
    <label for="emailUserUp">email</label>
    <input type="email" id="emailUserUp" value="<?php echo $data['usu_correo']?>">
  </div>

  <input type="submit" value="Modificar" class="btn--form">
</form>
<h1 class="title">editar contraseña</h1>
<form class="form" id="updatePass">
  <div class="wrap--form big">
    <label for="passActual">Contraseña Actual:</label>
    <input type="password" id="passActual" >
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
  <input type="submit" value="Modificar Contrañesa" class="btn--form">
</form>
