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
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>cosita</td>
          <td>lopera</td>
          <td>eve@gmail.com</td>
          <td>x x </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div id="tabs-2">
    <form id="createUser">
      <div class="wrap--form">
        <label for="nameUser">nombre:</label>
        <input type="text" id="nameUser">
      </div>
      <div class="wrap--form">
        <label for="SnameUser">segundo nombre:</label>
        <input type="text" id="SnameUser">
      </div>
      <div class="wrap--form">
        <label for="lastnameUser">apellido</label>
        <input type="text" id="lastnameUser">
      </div>
      <div class="wrap--form">
        <label for="SlastnameUser">segundo apellido:</label>
        <input type="text" id="SlastnameUser">
      </div>
      <div class="wrap--form">
        <label for="emailUser">email</label>
        <input type="email" id="emailUser">
      </div>
      <div class="wrap--form">
        <label for="emailUser">email</label>
        <select class="wrap--form">
          <option value="">administrador</option>
          <option value="">investigador</option>
        </select>
      </div>
      <div class="wrap--form">
        <label for="passUser">contraseña</label>
        <input type="password" id="passUser">
      </div><div class="wrap--form">
        <label for="repPassUser">repetir contraseña</label>
        <input type="password" id="repPassUser">
      </div>
      <input type="submit" value="registrar">
    </form>
  </div>

</div>
