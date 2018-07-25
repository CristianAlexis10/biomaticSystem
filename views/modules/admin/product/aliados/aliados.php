<h1 class="title">aliados</h1>
<div class="container--buttons">
  <button type="button" onclick="openModal(event, 'modal')"> + registrar aliado</button>
</div>
<table id="tableUser">
  <thead>
    <tr>
      <th>entidad</th>
      <th>descripcion</th>
      <th>tipo de vinculaciones</th>
      <th>estado</th>
      <th>eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>sdvsd</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
      <td>fsadfds</td>
      <td>dsfsadfsdf</td>
      <td>eliminar</td>
    </tr>
  </tbody>
</table>
<div class="containerModal" id="modal">
  <div class="content--modal">
    <span id="closeModal" onclick="closeModal(event, 'modal')">&times;</span>
    <h1 class="titleModal">registrar producto</h1>
    <form id="formAliados">
      <div class="wrap--form big">
        <label for="nameAliado">entidad</label>
        <input type="text" id="nameAliado">
      </div>
      <div class="wrap--form big">
        <label for="descAliado">descripción</label>
        <textarea name="name" rows="8" cols="80" id="descAliado"></textarea>
      </div>
      <div class="wrap--form big">
        <label for="typeAliado">tipo de articulo</label>
        <input type="text" id="typeAliado">
      </div>
      <div class="wrap--form big">
        <label for="typeAliado">estado</label>
        <select class="" name="">
          <option value="">activo</option>
          <option value="">inactivo</option>
        </select>
      </div>
      <input type="submit" class="btn--form">
    </form>
  </div>
</div>
