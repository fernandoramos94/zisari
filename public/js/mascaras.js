$(document).ready(function(){

	// formulario de registro
	$("#dia").mask("00", {placeholder: "Día"});
	$("#documento").mask("000000000000000", {placeholder: "Documento"});
	$("#anio").mask("0000", {placeholder: "Año"});
	$('#numeroCelular').mask('+(00) 000 000 00 00', {placeholder: "+(Código) Número de Móbil"});


	// formulario registro de logo
	$("#horaInicioText").mask('00:00:00',{placeholder:"00:00:00"});
	$("#horaFinalText").mask('00:00:00', {placeholder:"00:00:00"});
	$("#horaInicioImg").mask('00:00:00', {placeholder: "00:00:00"});
	$("#horaFinalImg").mask('00:00:00', {placeholder: "00:00:00"});
	$("#fechaInicioImg").mask('0000-00-00', {placeholder: "0000-00-00"});
	$("#fechaFinalImg").mask('0000-00-00', {placeholder: "0000-00-00"});
	$("#fechaInicioText").mask('0000-00-00',{placeholder: "0000-00-00"});
	$("#fechaFinalText").mask('0000-00-00', {placeholder: "0000-00-00"});
	
	$( "#fechaInicioText" ).datepicker({
	  	dateFormat: "yy-mm-dd"
	});
	$( "#fechaFinalText" ).datepicker({
	  	dateFormat: "yy-mm-dd"
	});
	$("#fechaInicioImg").datepicker({
	  	dateFormat: "yy-mm-dd"
	});
	$("#fechaFinalImg").datepicker({
	  	dateFormat: "yy-mm-dd"
	});

	$("#imagenLogo").on("change", function(e){
		if (this.files && this.files[0]) {
	    	var FR= new FileReader();
	    	FR.addEventListener("load", function(e) {
	    		$("#base").val(e.target.result);
	    	}); 
	    	FR.readAsDataURL( this.files[0] );
  		}
	})
});