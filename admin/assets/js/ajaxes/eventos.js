$("#create_evento").on('submit', function (event) {
	event.preventDefault();

	$.ajax('/ArchtionMovements/admin/assets/functions/ajaxes/create_evento.php', {
	    type: 'POST',  // http method
	    data : new FormData(this),  // data to submit
	    contentType:false,
        processData:false,
	    success: function (data, status, xhr) {
	    	if(data.success){
	    		window.location.href = '/ArchtionMovements/admin/index.php';
	    	}else{
	    		alert("Errror");
	    	}
	    },
	    error: function (jqXhr, textStatus, errorMessage) {
	            $('p').append('Error' + errorMessage);
	    }
	});
});

