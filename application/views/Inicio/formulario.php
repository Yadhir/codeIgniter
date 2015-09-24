<?= form_open("/Inicio/recibirDatos")?>

<? 

	var $nombre = array(
		"name" => "nombre",
		"placeholder" => "Escribe tu nombre"
		);

	var $descripcion = array(
		'name' => 'descripcion',
		'placeholder' => 'Escribe la descripcion del patron'
	);
?>

<?= form_label('Nombre: ', 'nombre') ?>
<?= form_input($nombre) ?>

<?= form_label('Descripcion: ', 'descripcion') ?>
<?= form_input($descripcion) ?>


<? form_close() ?>
</body>
</html>