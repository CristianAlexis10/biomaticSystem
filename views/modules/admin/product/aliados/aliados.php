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
      <td>fsadfds</td>
      <td>fsadfds</td>
      <td>dsfsadfsdf</td>
      <td class="actions"><a><i class="fas fa-trash-alt"></i></a></td>
    </tr>
  </tbody>
</table>
<div class="containerModal" id="modal">
  <div class="content--modal">
    <span id="closeModal" onclick="closeModal(event, 'modal')">&times;</span>
    <h1 class="titleModal">registrar aliado</h1>
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
        <label for="statusAliado">estado</label>
        <select id="statusAliado">
          <option value="">activo</option>
          <option value="">inactivo</option>
        </select>
      </div>
      <input type="submit" class="btn--form">
    </form>
  </div>
</div>
