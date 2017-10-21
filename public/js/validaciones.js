$(document).ready(function() {
	$("#btn_link1").on("click", function(){
		if ($("#name").val() == ""){
			notif({
				type: "warning",
				msg: "El campo nombre de usuario es requerido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#email").val() == ""){
			notif({
				type: "warning",
				msg: "El campo correo es requerido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#password").val() == ""){
			notif({
				type: "warning",
				msg: "El campo contraseña es requerido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#password-confirm").val() == "") {
			notif({
				type: "warning",
				msg: "El campo confirmar contraseña es requerido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		var emal = $("#email").val();
		var vali = validateEmail(emal);
		if (vali == false) {
			notif({
				type: "warning",
				msg: "El correo ingresado es invalido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		var spl = emal.split("@").pop();
		if (spl != "gmail.com") {
			notif({
				type: "warning",
				msg: "El campo correo solo admite cuentas de gmail",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		var pass = $("#password").val();
		var confPass = $("#password-confirm").val();
		if (pass != confPass) {
			notif({
				type: "warning",
				msg: "Las contraseñas no coinciden",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		$("#div2").show();
		$("#div1").hide();
	});
	$("#btn_link2").on("click", function(){
		if ($("#nombres").val() == ""){
			notif({
				type: "warning",
				msg: "El campo nombres es requerido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#apellidos").val() == ""){
			notif({
				type: "warning",
				msg: "El campo apellidos es requerido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#pais").val() == ""){
			notif({
				type: "warning",
				msg: "Seleccione un país",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#genero").val() == "") {
			notif({
				type: "warning",
				msg: "Seleccione un género",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		$("#div3").show();
		$("#div2").hide();
	});
	$("#btn_link3").on("click", function(){
		if ($("#dia").val() == ""){
			notif({
				type: "warning",
				msg: "El campo día es requerido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#mes").val() == ""){
			notif({
				type: "warning",
				msg: "Seleccione un mes",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#anio").val() == ""){
			notif({
				type: "warning",
				msg: "El campo año es requerido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#numeroCelular").val() == "") {
			notif({
				type: "warning",
				msg: "El campo +(Código) Número de Móbil es requerido ",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#correo").val() == "") {
			notif({
				type: "warning",
				msg: "El campo Correo de coinbase es requerido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		if ($("#documento").val() == "") {
			notif({
				type: "warning",
				msg: "El campo documento es requerido",
				position: "right",
				opacity: 0.8
			});
			return false;
		}
		$("#div4").show();
		$("#div3").hide();
		$(".crearcuenta").attr("style", "padding: 0");
		$("#title").hide();
		$("#textCrear").hide();
		$("#con").hide();
		var ht  = "<p><strong>"+$("#nombres").val()+" "+$("#apellidos").val()+"</strong><br><strong>"+$("#name").val()+"</strong></p>";
		$("#nombreFinalizar").append(ht);
		
	});
	function validateEmail(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
	$.getJSON('//freegeoip.net/json/?callback=?', function(data) {
		$("#ip").val(data.ip);
	});
})