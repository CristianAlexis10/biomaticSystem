<h1 class="title">compras y contraciones</h1>
<div class="container--buttons">
  <button type="button" onclick="openModal(event, 'modal')"> + registrar producto</button>
</div>
<table class="datatable" id="tableUser">
  <thead>
    <tr>
      <th>producto o servicio</th>
      <th>precio</th>
      <th>tipo de compra</th>
      <th>descripcion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>sadvsadfds</td>
      <td>1235215</td>
      <td>ewafawefwefwe</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
    </tr>
  </tbody>
</table>
<div class="containerModal" id="modal">
  <div class="content--modal">
    <span id="closeModal" onclick="closeModal(event, 'modal')">&times;</span>
    <h1 class="titleModal">registrar producto</h1>
    <form id="formPurchases">
      <div class="wrap--form big">
        <label for="namePurchases">nombre del producto o servicio</label>
        <input type="text" id="namePurchases">
      </div>
      <div class="wrap--form big">
        <label for="datePurchases">fecha</label>
        <input type="date" id="datePurchases">
      </div>
      <div class="wrap--two">
        <div class="wrap--form big">
          <label for="namePurchases">cantidad</label>
          <input type="text" id="namePurchases">
        </div>
        <div class="wrap--form big">
          <label for="costPrchases">precio</label>
          <input type="number" id="costPrchases">
        </div>
      </div>
      <div class="wrap--form big">
        <label for="descPurchases">descripción</label>
        <textarea id="descPurchases" rows="8" cols="80"></textarea>
      </div>
      <div class="wrap--form big">
        <label for="descPurchases">descripción</label>
        <textarea name="name" rows="8" cols="80"></textarea>
      </div>
      <input type="submit" class="btn--form">
    </form>
  </div>
</div>
