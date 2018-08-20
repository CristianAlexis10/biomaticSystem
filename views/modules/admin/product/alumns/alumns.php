<h1 class="title">aprendices</h1>
<div class="container--buttons">
  <button type="button" onclick="openModal(event, 'modal')"> + registrar aprendiz</button>
</div>
<table id="tableUser">
  <thead>
    <tr>
      <th>nombre</th>
      <th>ficha</th>
      <th>programa de formación</th>
      <th>tipo de vinculación</th>
      <th>eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>sdvsd</td>
      <td>fsadfds</td>
      <td>fsadfds</td>
      <td>dsfsadfsdf</td>
      <td class="actions"><a ><i class="fas fa-trash-alt"></i></a> </td>
    </tr>
  </tbody>
</table>
<div class="containerModal" id="modal">
  <div class="content--modal">
    <span id="closeModal" onclick="closeModal(event, 'modal')">&times;</span>
    <h1 class="titleModal">registrar aprendiz</h1>
    <form id="formAlums">
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="alumnName">nombre</label>
          <input type="text" id="alumnName">
        </div>
        <div class="wrap--form">
          <label for="alumnLast">apellido</label>
          <input type="text" id="alumnLast">
        </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="alumnTypedoc">Tipo de documento</label>
          <select id="alumnTypedoc">
            <option value="">Cedula de ciudadania</option>
            <option value="">tarjeta de identidad</option>
            <option value="">otro</option>
          </select>
        </div>
        <div class="wrap--form">
          <label for="alumnDoc">numero de documento</label>
          <input type="number" id="alumnDoc">
        </div>
      </div>
      <div class="wrap--form big">
        <label for="alumnName">correo</label>
        <input type="email" id="alumnEmail">
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="alumnPhone">numero de celular</label>
          <input type="number" id="alumnPhone">
        </div>
        <div class="wrap--form">
          <label for="alumnDate">fecha de inicio</label>
          <input type="date" id="alumnDate">
        </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="alumnDatend">fecha de finalización</label>
          <input type="date" id="alumnDatend">
        </div>
        <div class="wrap--form">
          <label for="alumnFic">ficha</label>
          <input type="number" id="alumnFic">
        </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="alumnProg">programa de formación</label>
          <input type="number" id="alumnProg">
        </div>
        <div class="wrap--form">
          <label for="alumnTypevin">Tipo de vinculación</label>
          <select id="alumnTypevin">
            <option>UNO</option>
            <option>DOS</option>
            <option>TRES</option>
          </select>
        </div>
      </div>
      <input type="submit" class="btn--form">
    </form>
  </div>
</div>
