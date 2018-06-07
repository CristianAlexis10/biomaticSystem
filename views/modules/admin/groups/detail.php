<h1 class="title"><?php echo $datagrupo['gru_nombre'] ?></h1>
<p>fecha de creación: <?php echo $datagrupo['gru_fecha_resgistro'] ?> </p>
<p>descripción del grupo: <?php echo $datagrupo['gru_descripcion'] ?> </p>
<div class="content--miembro">
  <p>miembros del grupo</p>
  <table class="table--detail">
    <thead>
      <tr>
        <th>nombre</th>
        <th>apellido</th>
        <th>correo</th>
        <th>Fecha de unión</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->master->procedure->PRByAll("saberIntegrantesGrupos",$datagrupo['gru_codigo']) as $row) {?>
          <tr>
            <td>evelin</td>
            <td>lopera</td>
            <td>nose</td>
            <td>nose</td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<div class="content--proyecto">
  <p>proyectos asiganados</p>
  <table class="table--detail">
    <thead>
      <tr>
        <th>nombre</th>
        <th>descripcion</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($this->master->procedure->PRByAll("saberProyectosDeGrupo",$datagrupo['gru_codigo']) as $row) {?>
          <tr>
            <td>evelin</td>
            <td>lopera</td>
            <td>nose</td>
            <td>nose</td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
