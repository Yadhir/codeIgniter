<h2 class="sub-header">Agregar Patron</h2>
<form id="formAgregar" name="formAgregar" action="http://localhost/codeIgniter/index.php/Controlador_admInicio/guardarPatron" method="POST" class="form-horizontal" role="formAgregar">
  <div class="form-group">
    <label for="agregar" class="col-lg-2 control-label">Nombre Nuevo Patron</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" id="nombrePatron" name='nombrePatron'
             placeholder="Nombre Patron">
    </div>
  </div>

  <div class="form-group">
    <label for="agregar" class="col-lg-2 control-label">Id Familia</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" id="idFamilia" name='idFamilia'
             placeholder="Id Familia">
    </div>
  </div>

  <div class="form-group" class="col-lg-2">
    <label for="agregar" class="col-lg-2 control-label">Descripcion:</label>
    <div class="col-lg-4">
      <textarea class="form-control" rows="5" id="descripcionPatron" name="descripcionPatron"></textarea>
    </div>
  </div>
  <p><input type="submit" name="btnAgregar" class="btn btn-success" id="btnAgregar" value="Agregar"/></p>
</form>

  <style type="text/css">
  #btnAgregar{
    margin-left: 450px;

  }

  </style>