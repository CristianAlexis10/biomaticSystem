<h1 class="title">programas de formación</h1>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Programas de formacion</a></li>
    <li><a href="#tabs-2">Crear programa </a></li>
    <li><a href="#tabs-3">Registrar aprendiz</a></li>
  </ul>
  <div id="tabs-1">
    <table class="datatable" id="tableUser">
      <thead>
        <tr>
          <th>nombre</th>
          <th>siglas</th>
          <th>Ficha</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($this->master->selectAll('programa_formacion') as $row) {?>
              <tr>
                <td><?php echo $row['porg_nombre'] ?></td>
                <td><?php echo $row['prog_siglas'] ?></td>
                <td><?php echo $row['id_ficha'] ?></td>
                <td>
                    <a href="#" onclick="eliminarFicha(<?php echo $row['prog_codigo']?>)"> Eliminar</a>
                 </td>
              </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>
  <div id="tabs-2">
    <form id="createFicha" class="form">
      <div class="wrap--two">
        <div class="wrap--form">
        <label for="nameProject">nombre del programa:</label>
        <input type="text" id="nameFicha">
      </div>
        <div class="wrap--form">
        <label for="dateProject">Siglas del programa:</label>
        <input type="text" id="siglas">
      </div>
      </div>
      <div class="wrap--form big">
        <label for="fichaProject"> numero de ficha:</label>
        <input type="text" id="fichaProject">
      </div>

      <input type="submit" value="registrar" class="btn--form">
    </form>
  </div>
  <div id="tabs-3">
    <form class="form" id="createAprendiz">
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="nameAprendiz">nombre aprendiz</label>
          <input type="text" class="" id="nameAprendiz">
        </div>
        <div class="wrap--form">
          <label for="lastAprendiz">apellidos aprendiz</label>
          <input type="text"  id="lastAprendiz">
        </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="typeAprendiz">tipo de documento</label>
          <select id="typeAprendiz" >
            <option value="">Cedula</option>
            <option value="">Tarjeta de identidad</option>
            <option value="">otro</option>
          </select>
        </div>
        <div class="wrap--form">
          <label for="docAprendiz">numero de documento</label>
          <input type="number" id="docAprendiz">
        </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="emailAprendiz">correo</label>
          <input type="email" id="emailAprendiz">
        </div>
        <div class="wrap--form">
          <label for="celphoneAprendiz">numero celular</label>
          <input type="text" id="celphoneAprendiz">
        </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="dateStartAprendiz">fecha de inicio</label>
          <input type="datetime" id="dateStartAprendiz">
        </div>
        <div class="wrap--form">
          <label for="dateEndAprendiz">fecha de finalización</label>
          <input type="datetime" id="dateEndAprendiz">
        </div>
        <div class="wrap--form">
          <label for="groupAprendiz">ficha</label>
          <input type="number" id="groupAprendiz">
        </div>
      </div>
      <div class="wrap--two">
        <div class="wrap--form">
          <label for="programAprendiz">programa de formacion</label>
          <select id="programAprendiz">

            <option value="">adsi</option>
          </select>
        </div>
        <div class="wrap--form">
          <label for="dateEndAprendiz">tipo de vinculacion</label>
          <select id="vinculacionAprendiz">
            <option value="">Voluntario</option>
            <option value="">Monitoria</option>
            <option value="">Contrato de aprendizaje</option>
          </select>
        </div>
      </div>
      <input type="submit" value="registrar" class="btn--form">
    </form>
  </div>

</div>
