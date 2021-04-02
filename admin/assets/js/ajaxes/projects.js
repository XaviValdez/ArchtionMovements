$("#create_project").on('submit', function (event) {
	event.preventDefault();
	debugger;
	$.ajax('/ArchtionMovements/admin/assets/functions/ajaxes/create_project.php', {
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
$("#edit_project").on('submit', function (event) {
	event.preventDefault();
	debugger;
	$.ajax('/ArchtionMovements/admin/assets/functions/ajaxes/edit_project.php', {
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
	$('.min_img').html("");
  	if (input.files && input.files[0]) {
  		var order={};
	  	for (var i = 0; i < input.files.length; i++) {
		    var reader = new FileReader();
		    reader.fileName = [input.files[i].name,i];
		    order[i]=input.files[i].name;

		    reader.onload = function(e) {
		    

		      $('.min_img').append("<div class='order_picker' data-name='"+e.target.fileName[0]+"' data-order='"+e.target.fileName[1]+"'><img style='max-height:200px;'  src='"+e.target.result+"' alt='' /></div>");
		    	$('input[name="order"]').val(JSON.stringify(order));
		    }
		    
		    reader.readAsDataURL(input.files[i]); // convert to base64 string
		}
  	}
}

$("#files").change(function(e,d) {
  readURL(this);
});