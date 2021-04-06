$("#enviar_proyecto").on('submit', function (event) {
    console.log("button pressed");

	event.preventDefault();
	$.ajax('/ArchtionMovements/public/assets/functions/ajaxes/send_proyecto.php', {
	    type: 'POST',  // http method
	    data : new FormData(this),  // data to submit
	    contentType:false,
        processData:false,
	    success: function (data, status, xhr) {
	    	if(data.success){
				alert("Proyecto enviado correctamente");
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
	        console.log("error: " + errorMessage );
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
		    

		      $('.min_img').append("<div class='col-3'><div class='order_picker' data-name='"+e.target.fileName[0]+"' data-order='"+e.target.fileName[1]+"'><img style='max-height:200px;'  src='"+e.target.result+"' alt='' /></div></div>");
		    	$('input[name="order"]').val(JSON.stringify(order));
		    }
		    
		    reader.readAsDataURL(input.files[i]); // convert to base64 string
		}
  	}
}

$("#files").change(function(e,d) {
	debugger;
  readURL(this);
});