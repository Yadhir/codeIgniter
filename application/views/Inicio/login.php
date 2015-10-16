<!DOCTYPE html>
<html>
<head>
	<title>	Ingresar a sistema</title>

	
	<link href="http://localhost/codeIgniter/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
	<link href="http://localhost/codeIgniter/bootstrap/css/signin.css" rel="stylesheet"> 
	
</head>
<body>

	<div class="container">

    <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading">Iniciar Sesion</h2>
        
        <label for="usuario" class="sr-only">Usuario</label>
        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
        
        <label for="password" class="sr-only">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Iniciar</button>
    </form>

    </div> <!-- /container -->

</body>
</html>