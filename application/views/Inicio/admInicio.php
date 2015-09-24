<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

	<script src="http://localhost/codeIgniter/bootstrap/js/jquery.js"></script>
	<link href="http://localhost/codeIgniter/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
	<script src="http://localhost/codeIgniter/bootstrap/js/bootstrap.min.js"></script> 
	<link href="http://localhost/codeIgniter/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet"> 
	<link href="http://localhost/codeIgniter/bootstrap/css/sidebar.css" rel="stylesheet">
</head>
<body>
<div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
            <li><a href="http://localhost/codeIgniter/index.php/Controlador_admInicio/hola">Gestionar Familia Patrones</a></li>
            <li><a href="#">Gestionar Patrones</a></li>
            <li><a href="#">Gestionar Tipos de patrones</a></li>
          </ul>
</div>


<style type="text/css">
	.sidebar{
	position: fixed;
	top: 51px;
	bottom: 0px;
	left: 0px;
	z-index: 1000;
	display: block;
	padding: 20px;
	overflow-x: hidden;
	overflow-y: auto;
	background-color: #F5F5F5;
	border-right: 1px solid #EEE;
	}
	.nav-sidebar{
	margin-right: -21px;
	margin-bottom: 20px;
	margin-left: -20px;
	}

	.nav-sidebar > .active > a, .nav-sidebar > .active > a:hover, .nav-sidebar > .active > a:focus {
    color: #FFF;
    background-color: #428BCA;
	}

	.nav > li > a {
    position: relative;
    display: block;
    padding: 10px 15px;
}

</style>
	

</body>
</html>