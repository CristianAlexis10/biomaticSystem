<h1 class="title">publicaciones</h1>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">publicaciones</a></li>
    <li><a href="#tabs-2">tipo de publicacion</a></li>
  </ul>
  <div id="tabs-1">
    <div class="container--buttons">
      <button type="button" onclick="openModal(event, 'modal')"> + crear publicación</button>
    </div>
    <table class="datatable" id="tableUser">
      <thead>
        <tr>
          <th>nombre</th>
          <th>fecha</th>
          <th>tipo</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>sdgdfdz</td>
          <td>sebgd</td>
          <td>aebdf</td>
          <td class="actions"><a onclick="openModal(event, 'modal3')"><i class="fas fa-share-square"></i></a><a><i class="fas fa-trash-alt"></i></a></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div id="tabs-2">
    <div class="container--buttons">
      <button type="button" onclick="openModal(event, 'modal2')"> + crear tipo de publicación</button>
    </div>
    <table class="datatable" id="tableUser-2">
      <thead>
        <tr>
          <th>nombre</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>sdgdfdz</td>
          <td class="actions"><a><i class="fas fa-share-square"></i></a><a><i class="fas fa-trash-alt"></i></a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="containerModal" id="modal">
  <div class="content--modal">
    <span id="closeModal" onclick="closeModal(event, 'modal')">&times;</span>
    <h1 class="titleModal">crear publicación</h1>
    <form id="formPublication" class="formModal">
      <div class="wrap--form big">
        <label for="namePublication">nombre</label>
        <input type="text" id="namePublication">
      </div>
      <div class="wrap--form big">
        <label for="datePublication">fecha</label>
        <input type="date" id="datePublication">
      </div>
      <div class="wrap--form big">
        <label for="typePublication">tipo de articulo</label>
        <select id="typePublication">
          <option value="">llamar de php</option>
        </select>
      </div>
      <div class="wrap--form big">
        <label for="statusPublication">estado</label>
        <select id="statusPublication">
          <option value="">en proceso</option>
          <option value="">publicado</option>
          <option value="">sin publicar</option>
        </select>
      </div>
      <input type="submit" class="btn--form">
    </form>
  </div>
</div>
<div class="containerModal" id="modal2">
  <div class="content--modal">
    <span id="closeModal" onclick="closeModal(event, 'modal2')">&times;</span>
    <h1 class="titleModal">crear tipo publicación</h1>
    <form id="formPublicationType" class="formModal" action="crear-tipo" method="post">
      <div class="wrap--form big">
        <label for="namePublicationType">nombre</label>
        <input type="text" id="namePublicationType">
      </div>
      <input type="submit" class="btn--form">
    </form>
  </div>
</div>
<div class="containerModal" id="modal3">
  <div class="content--modal">
    <span id="closeModal" onclick="closeModal(event, 'modal3')">&times;</span>
    <h1 class="titleModal">crear publicación</h1>
    <form id="UpdateformPublication" class="formModal">
      <div class="wrap--form big">
        <label for="UpdatenamePublication">nombre</label>
        <input type="text" id="UpdatenamePublication">
      </div>
      <div class="wrap--form big">
        <label for="UpdatedatePublication">fecha</label>
        <input type="date" id="UpdatedatePublication">
      </div>
      <div class="wrap--form big">
        <label for="UpdatetypePublication">tipo de articulo</label>
        <select id="UpdatetypePublication">
          <option value="">llamar de php</option>
        </select>
      </div>
      <div class="wrap--form big">
        <label for="UpdatestatusPublication">estado</label>
        <select id="UpdatestatusPublication">
          <option value="">en proceso</option>
          <option value="">publicado</option>
          <option value="">sin publicar</option>
        </select>
      </div>
      <input type="submit" class="btn--form">
    </form>
  </div>
</div>
