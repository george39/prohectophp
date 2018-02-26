
<?php include '../extend/header.php'; ?>

<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<span class="card-title">Alta de usuarios</span>
				<!-- ins_usuarios es una instancia que se agrega para identificarlo mas rapido y enctype="multipart/form-data es para enviar una foto del usuario-->
				<form class="form" action="ins_usuarios.php" method="post" enctype="multipart/form-data">
					<div class="input-field">
				<!-- onblur="may(this.value, this.id"> es para dejar enviar todos los datos del formulario en mayusculas -->
						<input type="text" name="nick" required autofocus title="DEBE DE TENER ENTRE 8 Y 15 CARACTERES, SOLO LETRAS" pattern="[A-Za-z]{8, 15}" id="nick" onblur="may(this.value, this.id)">
						<label for="nick">Nick</label>
					</div>

					<!-- para validar si el usuario existe en la bd -->
					<div class="validacion"></div>	
				</form> 
			</div>
		</div>
	</div>
</div>

<?php include '../extend/script.php'; ?>
<!-- metodo ajax para verificar que el nick exista en la bd -->
	<script>
		$('#nick').change(function(){
			$.post('ajax_validacion_nick.php',{
				nick:$('#nick').val(),

				beforeSend: function(){
					$('.validacion').html("Espere un momento por favor");
				}

			}, function(respuesta){
				$('.validacion').html(respuesta);
			})
	});

	</script>
	

</body>
</html>
