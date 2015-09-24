<script>
/*function cargar(div, desde)
{
     $(div).load(desde);
}*/ 

$(document).ready(function(){
    $(".botonModificar").click(function(){
      var idObtenido = $(this).attr("id").split("_");
        $("#nombreFamiliaMod").val($("#nombre_"+idObtenido[1]).text());
        $("#descripcionMod").val($("#descripcion"+idObtenido[1]).text());
        $("#idMod").val($("#id_"+idObtenido[1]).text());
    });
});


</script>

<h2 class="sub-header">Modificar Familia</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Familia</th>
      <th>Descripcion</th>
      <th>Fecha Ingreso </th>
      <th>Seleccionar </th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach ($enlaces->result() as $row) {
          echo "<tr class='fila' id='fila_".$row->idPatron."'><td id='id_".$row->idPatron."'>".$row->idPatron."</td><td id='nombre_".$row->idPatron."'>".$row->nombre."</td><td id='descripcion".$row->idPatron."'>".$row->descripcion."</td><td>".$row->fecha."</td><td><button class='btn btn-default btn-xs botonModificar' id='botonModificarID_".$row->idPatron."'>Modificar</button></td></tr>";
        }
      ?>
  </tbody>
</table>

<div id="divForm" class="table-responsive">
            
          </div>

<form id="formModificar" name="formModificar" action="http://localhost/codeIgniter/index.php/Controlador_admInicio/modificar" method="POST" class="form-horizontal" role="formModificar">
  <div class="form-group">
    <label for="modificar" class="col-lg-2 control-label">Nombre Familia</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="nombreFamiliaMod" name="nombreFamiliaMod" 
             placeholder="Nombre Familia">
    </div>
  </div>
  <div class="form-group" class="col-lg-2">
    <label for="modificar" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="descripcionMod"  name="descripcionMod"
             placeholder="Descripcion">
    </div>
  </div>

   <div class="form-group" class="col-lg-2">
    <label for="modificar" class="col-lg-2 control-label">ID</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="idMod"  name="idMod"
             placeholder="ID" readonly="true"></input>
    </div>
  </div>

  <p><input type="submit" name="btnModificar" class="btn btn-success" id="btnModificar" value="Modificar"/></p>