$("#login_user").on('submit', function (event) {
    console.log("button pressed");

	event.preventDefault();
	$.ajax('/ArchtionMovements/public/assets/functions/ajaxes/login.php', {
	    type: 'POST',  // http method
	    data: $("#login_user").serialize(),  // data to submit
	    success: function (data, status, xhr) {
	    	if(data.success){
	    		window.location.href = '/ArchtionMovements/public/pages/index.php';
	    	}
	    },
	    error: function (jqXhr, textStatus, errorMessage) {
            alert(errorMessage);
	    }
	});
});