<h1 class="title">lista de asistencia</h1>
<div class="container--buttons">
  <button type="button"> + Adjuntar asistencia</button>
</div>
<table class="datatable" id="tableUser">
  <thead>
    <tr>
      <th>fecha</th>
      <th>descripción</th>
      <th>acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>cosa</td>
      <td>cosa</td>
      <td>mostrar archivo</td>
    </tr>
  </tbody>
</table>
<div class="container--modal" id="modal">
  <div class="content--modal">
    <span>&times;</span>
    <h1>adjuntar asistencia</h1>
    <form id="formAssistence">
      <div class="wrap--form big">
        <label for="dateAssistence">fecha</label>
        <input type="date" id="dateAssistence">
      </div>
      <div class="wrap--form big">
        <label for="dateDecripcion">descripción</label>
        <input type="text" id="dateDecription">
      </div>
      <input type="file" value="name" class="btn--form">
    </form>
  </div>
</div>
  
