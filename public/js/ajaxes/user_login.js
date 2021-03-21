$("#login_user").on('submit', function (event) {
    console.log("button pressed");

	event.preventDefault();
	$.ajax('/ArchtionMovements/public/assets/functions/ajaxes/login.php', {
	    type: 'POST',  // http method
	    data: $("#login_user").serialize(),  // data to submit
	    success: function (data, status, xhr) {
	    	if(data.success){
	    		window.location.href = window.location.href;
	    	}
			else if (data.error == "user_not_found" || data.error == "pass_incorrect") {
				alert("Email o contraseña incorrectos");
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