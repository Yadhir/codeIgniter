<script>
/*function cargar(div, desde)
{
     $(div).load(desde);
}*/ 

$(document).ready(function(){
    $(".botonModificar").click(function(){
      var idObtenido = $(this).attr("id").split("_");
        $("#descripcionMod").val($("#descripcion"+idObtenido[1]).text());
      });
});


</script>


<h2 class="sub-header">Ver patron</h2>
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
            echo "<tr class='fila' id='fila_".$row->idPatron."'> <td id='id_".$row->idFamiliaForanea."'>".$row->idFamiliaForanea."</td> <td id='id_".$row->nombre."'>".$row->nombre."</td><td id='id_".$row->idPatron."'>".$row->idPatron."</td><td id='nombre_".$row->idPatron."'>".$row->nombrePatron."</td><td id='descripcion".$row->idPatron."'>".$row->descripcionPatron."</td><td>".$row->fechaPatron."</td><td><button class='btn btn-default btn-xs botonModificar' id='botonModificarID_".$row->idPatron."'>Ver Descripcion</button></td></tr>";
          }
        
      ?>
  </tbody>
</table>

<form id="formEliminar" name="formEliminar" action="" method="POST" class="form-horizontal" role="formEliminar">
  <div class="form-group" class="col-lg-2">
    <label for="modificar" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="descripcionMod"  name="descripcionMod"
             placeholder="Descripcion" readonly="true">
    </div>
  </div>

  
