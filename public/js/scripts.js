$(document).ready(function() {
	
	//                               Agregados de manera temporal

	// Iniciar dropdowns
	$(".dropdown-trigger.dropdownmenu").dropdown({
		onOpenStart: function() {
			$("#dropdownmenu").siblings().find(".right").html("arrow_drop_up");
		},
		onCloseStart: function() { 
			$("#dropdownmenu").siblings().find(".right").html("arrow_drop_down");
		}
	});
 	$('.sidenav').sidenav();
	$('.collapsible').collapsible();

	//               FIN                Agregados de manera temporal

	// Si existe .box-form Centrar fomulario de inicio al cargar la pagina y luego al redimensionar la pantalla
	if(!$(".box-form").length == 0) {
	  	centrarformulario();
	  	$(window).on('resize', function () {
	    	centrarformulario();
		});
	}

});

// Centrar formulario de login si existe
function centrarformulario() {
    var coordenadas = $(".box-form").position();
	$(".box-form").height($(window).height()-coordenadas.top-40);
};


