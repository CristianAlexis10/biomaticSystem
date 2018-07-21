<h1 class="title">actas de reunion</h1>
<div id="tabs">
  <ul>
    <li><a href="#tab-1">actas</a></li>
    <li><a href="#tab-2">crear acta</a></li>
  </ul>
  <div id="tab-1">
    <table class="datatable" id="tableUser">
      <thead>
        <tr>
          <th>nombre comite</th>
          <th>fecha</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>holaa</td>
          <td>holaa</td>
          <td><a href="detalles-acta">Ver</a></td>
        </tr>
      </tbody>

    </table>
  </div>
  <div id="tab-2">
    <form id="createActa">
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="nameActa">nombre del comite</label>
          <input type="text" id="nameActa">
        </div>
        <div class="wrap--form">
          <label for="cityActa">ciudad</label>
          <input type="text" id="cityActa">
        </div>
        <div class="wrap--form">
          <label for="dateActa">fecha</label>
          <input type="date" id="dateActa">
        </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="datetimeStartActa">hora inicio</label>
          <input type="time" id="datetimeStartActa">
        </div>
        <div class="wrap--form">
          <label for="datetineEndActa">hora finalización</label>
          <input type="time" id="datetineEndActa">
        </div>
        <div class="wrap--form">
          <label for="PlaceActa">lugar</label>
          <input type="text" id="PlaceActa">
        </div>
      </div>
      <div class="wrap--form big">
        <label for="dirActa">direccion general/reginal/centro</label>
        <input type="text" id="dirActa">
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="themeActa">temas</label>
          <textarea rows="5" id="themeActa"></textarea>
        </div>
        <div class="wrap--form">
          <label for="objectiveActa">objetivo</label>
          <textarea rows="5"id="objectiveActa"></textarea>
        </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="meetActa">desarrollo de la reunion</label>
          <textarea rows="5" id="meetActa"></textarea>
        </div>
        <div class="wrap--form">
          <label for="conclutiveActa">conclusiones</label>
          <textarea rows="5"id="concluActa"></textarea>
        </div>
      </div>
      <h2 class="subtitle">compromisos</h2>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="activityActa">actividad</label>
          <textarea name="name" rows="4" id="activityActa"></textarea>
        </div>
        <div class="wrap--form">
          <label for="responActa">responsable</label>
          <textarea name="name" rows="4" id="responActa"></textarea>
        </div>
        <div class="wrap--form">
          <label for="dataComproActa">fecha</label>
          <input type="date" id="dataComproActa">
        </div>
      </div>
      <h2>asistentes</h2>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="NameAsistActa">nombre</label>
          <input type="text" id="NameAsistActa">
        </div>
        <div class="wrap--form">
          <label for="cargoActa">cargo</label>
          <input type="text" id="cargoActa">
        </div>
      </div>
      <h2>invitados</h2>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="nameInvitedActa">nombre</label>
          <input type="text" id="nameInvitedActa">
        </div>
        <div class="wrap--form">
          <label for="cargoInvitedActa">cargo</label>
          <input type="text" id="cargoInvitedActa">
        </div>
        <div class="wrap--form">
          <label for="entidadActa">entidad</label>
          <input type="text" id="entidadActa">
        </div>
      </div>
      <input type="submit" value="crear acta" class="btn--form">
    </form>
  </div>
</div>
