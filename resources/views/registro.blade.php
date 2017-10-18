@extends('template')
@section("contenedor")
<form action="" class="crearcuenta">
    <div id="list1">
        <h3 class="text">Crear Cuenta</h3>
    	<div class="form-group">
    		<label for="Nombre"><h5>Con las cuentas de Zisari se abre todo un mundo de ventajas para interactuar y conocer.</h5></label>
    		<input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre de usuario" required autofocus>
    		<input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="alguien@gmail.com" required autofocus>
    		<input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Crear contraseña" required autofocus>
    		<input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Confirmar contraseña" required autofocus>
	    </div>
    	<p class="text-center">
    		<a class="btn btn-primary btn-block" id="btn_link1">Siguiente</a>
    	</p>
    </div>
    <div id="list2" style="display: none">
        <h1 class="text-center" style="color: #74accf"><B>Zisari</B></h1>
		<h3 class="text">Crear Cuenta</h3>
		<div class="form-group">
			<label for="Nombre"><h5>Con las cuentas de Zisari se abre todo un mundo de ventajas para interactuar y conocer.</h5></label>
			<input type="text" class="form-control" name="" placeholder="Nombres" required autofocus>
			<input type="text" class="form-control" name="" placeholder="Apellidos" required autofocus>
			<select class="form-control" style="margin: 15px 0;">
				<option>Seleccionar país</option>
			</select>
			<select class="form-control" style="margin: 15px 0;">
				<option>Selecciona tu género</option>
				<option value="Hombre">Hombre</option>
				<option value="Mujer">Mujer</option>
			</select>
		</div>
		<p class="text-center">
			<a class="btn btn-primary btn-block" id="btn_link2">Siguiente</a>
		</p>
    </div>
    <div id="list3" style="display: none">
        <h1 class="text-center" style="color: #74accf"><B>Zisari</B></h1>
		<h3 class="text">Crear Cuenta</h3>
		<div class="form-group">
			<label for="Nombre"><h5>Con las cuentas de Zisari se abre todo un mundo de ventajas para interactuar y conocer.</h5></label>
		<div class="row">
			<div class="col-md-4">
					<input type="text" class="form-control" name="" placeholder="Día" required autofocus>
			</div>
			<div class="col-md-4">
					<select class="form-control">
						<option>Seleccione</option>
					</select>
			</div>
			<div class="col-md-4">
					<input type="text" class="form-control" name="" placeholder="Año" required autofocus>
			</div>
		</div>
		<!-- <div class="input-group"></div>	 -->
			<input type="text" class="form-control" name="" placeholder="+(Código) Número de celular" required autofocus>
			<input type="text" class="form-control" name="" placeholder="Correo de Coinbase" required autofocus>
			<input type="text" class="form-control" name="" placeholder="Documento de Identidad" required autofocus>
		<!-- </div> -->
		<p class="text-center">
			<a class="btn btn-primary btn-block" id="btn_link3">Siguiente</a>
		</p>
    </div>
    <div id="list4" style="display: none">
        <h1 class="text-center" style="color: #74accf"><B>Zisari</B></h1>
		<h3 class="text">Escribir contraseña</h3>
		<div class="form-group">
			<input type="text" class="form-control" name="" placeholder="Contraseña" required autofocus>
		</div>
		<p class="text-center">
			<a class="btn btn-primary btn-block" id="btn_link4">Siguiente</a>
		</p>
    </div>

</form>
<script>
    $(document).ready(function(){
        $("#btn_link1").on("click", function(){
            $("#list1").hide();
            $("#list2").show();
        });
        $("#btn_link2").on("click", function(){
            $("#list2").hide();
            $("#list3").show();
        });
        $("#btn_link3").on("click", function(){
            $("#list3").hide();
            $("#list4").show();
        });
    });
</script>
@stop()