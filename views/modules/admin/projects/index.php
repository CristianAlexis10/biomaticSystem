<h1 class="title">gestionar proyectos</h1>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">proyectos</a></li>
    <li><a href="#tabs-2">Crear proyecto</a></li>
  </ul>
  <div id="tabs-1">
    <table class="datatable" id="tableUser">
      <thead>
        <tr>
          <th>nombre</th>
          <th>fecha inicio</th>
          <th>programa de formacion</th>
          <th>codigo</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>cosita</td>
          <td>mañana</td>
          <td>analisis y desarrollo de los sistemas de informaciom</td>
          <td>no se que tan</td>
          <td>x x </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div id="tabs-2">
    <form id="createProject" class="form">
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="nameProject">nombre del projecto:</label>
        <input type="text" id="nameProject">
      </div>
        <div class="wrap--form">
        <label for="dateProject">fecha inicio:</label>
        <input type="date" id="dateProject">
      </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="fichaProject">ficha:</label>
        <input type="text" id="fichaProject">
      </div>
      </div>
      <input type="submit" value="registrar" class="btn--form">
    </form>
  </div>

</div>
