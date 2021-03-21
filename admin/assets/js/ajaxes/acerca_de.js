$("#create_acerca_de").on('submit', function (event) {
	event.preventDefault();
	debugger;
	$.ajax('/ArchtionMovements/admin/assets/functions/ajaxes/create_acerca_de.php', {
	    type: 'POST',  // http method
	    data : new FormData(this),  // data to submit
	    contentType:false,
        processData:false,
	    success: function (data, status, xhr) {
	    	if(data.success){
	    		//window.location.href = '/ArchtionMovements/admin/index.php';
	    	}else{
	    		//TODO: show error
	    	}
	    },
	    error: function (jqXhr, textStatus, errorMessage) {
	            $('p').append('Error' + errorMessage);
	    }
	});
});
function readURL(input) {
  if (input.files && input.files[0]) {
  	for (var i = 0; i < input.files.length; i++) {
	    var reader = new FileReader();
	    $('.min_img').html("");
	    reader.onload = function(e) {

	      $('.min_img').append("<img style='max-height:200px;'  src='"+e.target.result+"' alt='' />");
	    }
	    
	    reader.readAsDataURL(input.files[i]); // convert to base64 string
	}
  }
}

$("#files").change(function(e,d) {
  readURL(this);
});