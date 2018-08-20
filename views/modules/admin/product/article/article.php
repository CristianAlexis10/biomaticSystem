<h1 class="title">articulos de estudio</h1>
<div class="container--buttons">
  <button type="button" onclick="openModal(event, 'modal')"> + crear publicación</button>
</div>
<table class="datatable" id="tableUser">
  <thead>
    <tr>
      <th>nombre</th>
      <th>fecha</th>
      <th>descripcion</th>
      <th>acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>dbdfbdfbdf</td>
      <td>dsfgdfgdf</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
      <td class="actions"><a><i class="fas fa-download"></i></a><a><i class="fas fa-trash-alt"></i</a></td>
    </tr>
    <tr>
      <td>dbdfbdfbdf</td>
      <td>dsfgdfgdf</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
      <td class="actions"><a><i class="fas fa-download"></i></a><a><i class="fas fa-trash-alt"></i</a></td>
    </tr>
  </tbody>
</table>
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
        <label for="typePublication">descripción</label>
        <textarea name="name" rows="8" cols="80"></textarea>
      </div>
        <input type="file" name="" value="">
        <input type="submit" class="btn--form">
    </form>
  </div>
</div>
