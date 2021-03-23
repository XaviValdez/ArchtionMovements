$("#enviar_proyecto").on('submit', function (event) {
    console.log("button pressed");

	event.preventDefault();
	$.ajax('/ArchtionMovements/public/assets/functions/ajaxes/send_proyecto.php', {
	    type: 'POST',  // http method
	    data: $("#enviar_proyecto").serialize(),  // data to submit
	    success: function (data, status, xhr) {
	    	if(data.success){
				alert("Proyecto enviado correctamente");
	    		window.location.href = '/ArchtionMovements/public/pages/index.php';
	    	}
			else if(data.error == "missing_fields"){
				alert("No se han llenado todos los campos");
			}
			else {
				alert("¡Error inesperado!");
			}
	    },
	    error: function (jqXhr, textStatus, errorMessage) {
	        console.log("error: " + errorMessage );
	    }
	});

});