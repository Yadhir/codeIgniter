<script>
/*function cargar(div, desde)
{
     $(div).load(desde);
}*/ 

$(document).ready(function(){
    $(".botonModificar").click(function(){
      var idObtenido = $(this).attr("id").split("_");
        $("#nombrePatronEliminar").val($("#nombre_"+idObtenido[1]).text());
        $("#descripcionEliminar").val($("#descripcion"+idObtenido[1]).text());
        $("#idEliminar").val($("#id_"+idObtenido[1]).text());
    });
});


</script>

<h2 class="sub-header">Eliminar Patrón</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id Familia</th>
      <th>Familia</th>
      <th>Id</th>
      <th>Patron</th>
      <th>Descripcion</th>
      <th>Fecha</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach ($enlaces->result() as $row) {
          echo "<tr class='fila' id='fila_".$row->idPatron."'><td id='id_".$row->idPatron."'>".$row->idPatron."</td><td id='nombre_".$row->idPatron."'>".$row->nombre."</td><td id='descripcion".$row->idPatron."'>".$row->descripcionPatron."</td><td>".$row->fechaPatron."</td><td><button class='btn btn-default btn-xs botonModificar' id='botonModificarID_".$row->idPatron."'>Eliminar</button></td></tr>";
        }
      ?>
  </tbody>
</table>

<div id="divForm" class="table-responsive">
</div>

<form id="formEliminar" name="formEliminar" action="http://localhost:8080/codeIgniter/index.php/Controlador_admInicio/eliminar" method="POST" class="form-horizontal" role="formEliminar">
  <div class="form-group">
    <label for="eliminar" class="col-lg-2 control-label">Nombre Patrón</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="nombrePatronEliminar" name="nombrePatronEliminar" 
             placeholder="Nombre Patrón" readonly="true">
    </div>
  </div>
  <div class="form-group" class="col-lg-2">
    <label for="eliminar" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="descripcionEliminar"  name="descripcionEliminar"
             placeholder="Descripcion" readonly="true">
    </div>
  </div>

   <div class="form-group" class="col-lg-2">
    <label for="eliminar" class="col-lg-2 control-label">ID</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="idEliminar"  name="idEliminar"
             placeholder="ID" readonly="true"></input>
    </div>
  </div>

  <p><input type="submit" name="btnEliminar" class="btn btn-success" id="btnEliminar" value="Eliminar"/></p>