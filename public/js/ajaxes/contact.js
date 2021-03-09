$("#contact_form").on('submit', function (event) {
    console.log("button pressed");

	event.preventDefault();
	$.ajax('/ArchtionMovements/public/assets/functions/ajaxes/send_contact.php', {
	    type: 'POST',  // http method
	    data: $("#contact_form").serialize(),  // data to submit
	    success: function (data, status, xhr) {
	    	if(data.success){
				alert("Mensaje enviado correctamente");
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
            alert(errorMessage);
	    }
	});
});