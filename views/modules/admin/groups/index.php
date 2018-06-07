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
          <th>nombre</th>
          <th>descripcion</th>
          <th>fecha de registro</th>
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
    <form id="createGroup" class="form">
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="nameGroup">nombre del grupo</label>
        <input type="text" id="nameGroup">
        </div>
        <div class="wrap--form">
        <label for="descGroup">descripcion</label>
        <input type="text" id="descGroup">
        </div>
      </div>
      <input type="submit" value="registrar" class="btn--form">
    </form>
  </div>

</div>
