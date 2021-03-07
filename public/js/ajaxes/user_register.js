$("#register_user").on('submit', function (event) {
    console.log("button pressed");

	event.preventDefault();
	$.ajax('/ArchtionMovements/public/assets/functions/ajaxes/register.php', {
	    type: 'POST',  // http method
	    data: $("#register_user").serialize(),  // data to submit
	    success: function (data, status, xhr) {
	    	if(data.success){
	    		window.location.href = '/ArchtionMovements/public/pages/index.php';
	    	}
			else if(data.error == "missing_fields"){
				alert("No se han llenado todos los campos");
			}
			else if(data.error == "user_already_registered"){
				alert("Alguien ya se ha registrado con ese correo");
			}
			else {
				alert("Error inesperado");
			}
	    },
	    error: function (jqXhr, textStatus, errorMessage) {
            alert(errorMessage);
	    }
	});
});