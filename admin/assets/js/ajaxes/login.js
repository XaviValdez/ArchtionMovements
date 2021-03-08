$("#login_admin").on('submit', function (event) {
	event.preventDefault();
	$.ajax('/ArchtionMovements/admin/assets/functions/ajaxes/login.php', {
	    type: 'POST',  // http method
	    data: $("#login_admin").serialize(),  // data to submit
	    success: function (data, status, xhr) {
	    	if(data.success){
	    		window.location.href = '/ArchtionMovements/admin/index.php';
	    	}else{
	    		//TODO: show error
	    	}
	    },
	    error: function (jqXhr, textStatus, errorMessage) {
	            $('p').append('Error' + errorMessage);
	    }
	});
});