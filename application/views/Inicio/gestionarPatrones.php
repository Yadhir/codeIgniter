<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
function cargar(div, desde)
{
     $(div).load(desde);
}
</script>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Gestionar Patrones</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-2 placeholder">
              <button type="button" onclick="cargar('#divtest','http://localhost/codeIgniter/index.php/Controlador_admInicio/verFamilia')" class="btn btn-success">Ver Patrones</button>
            </div>
            <div class="col-xs-6 col-sm-2 placeholder">
              <button type="button" onclick="cargar('#divtest','http://localhost/codeIgniter/index.php/Controlador_admInicio/agregarFamilia')" class="btn btn-primary">Agregar</button>            
            </div>
            <div class="col-xs-6 col-sm-2 placeholder">
              <button type="button" onclick="cargar('#divtest','http://localhost/codeIgniter/index.php/Controlador_admInicio/modificarFamilia')" class="btn btn-warning">Modificar</button>            
            </div>
            <div class="col-xs-6 col-sm-2 placeholder">
              <button type="button" onclick="cargar('#divtest','http://localhost/codeIgniter/index.php/Controlador_admInicio/eliminarFamilia')" class="btn btn-danger">Eliminar</button>            
            </div>
          </div>

          
          <div id="divtest" class="table-responsive">
            
          </div>

      </div>

    </head>
    <body>
        

</div>

          
