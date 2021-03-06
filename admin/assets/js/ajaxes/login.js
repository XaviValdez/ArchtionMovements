$("#login_admin").on('submit', function (event) {
	event.preventDefault();
	$.ajax('/admin/assets/functions/ajaxes/login.php', {
	    type: 'POST',  // http method
	    data: $("#login_admin").serialize(),  // data to submit
	    success: function (data, status, xhr) {
	    	if(data.success){
	    		window.location.href = '/ArchtionMovements/admin/index.php'; //Will take you to Google.
	    	}
	    },
	    error: function (jqXhr, textStatus, errorMessage) {
	            $('p').append('Error' + errorMessage);
	    }
	});
});