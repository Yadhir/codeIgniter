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
      <th>Id</th>
      <th>Patron</th>
      <th>Descripción</th>
      <th>Fecha Ingreso </th>
      <th>Accion</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach ($enlaces->result() as $row) {
          echo "<tr class='fila' id='fila_".$row->idPatron."'><td id='id_".$row->idPatron."'>".$row->idPatron."</td><td id='nombre_".$row->idPatron."'>".$row->nombre."</td><td id='descripcion".$row->idPatron."'>".$row->descripcion."</td><td>".$row->fecha."</td><td><button class='btn btn-default btn-xs botonModificar' id='botonModificarID_".$row->idPatron."'>Eliminar</button></td></tr>";
        }
      ?>
  </tbody>
</table>

<div id="divForm" class="table-responsive">