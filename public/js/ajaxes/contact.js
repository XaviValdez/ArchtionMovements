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

	// SEND EMAIL VIA IFTTT
	let name = jQuery('input[name="name"]').val();
    let email = jQuery('input[name="email"]').val();
    let msg = $("#message").val();

    let url = "https://maker.ifttt.com/trigger/contacto_am/with/key/iw0uDcJEyNQw8bGNZScObh9h_eY0TmSYgM7yZH-0-BD?value1="+name+"&value2="+email+"&value3="+msg;
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({
        value: "1",
    }));
});