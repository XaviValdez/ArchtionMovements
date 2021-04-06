$("#search_project").on('submit', function (event) {
    console.log("button pressed");

	event.preventDefault();
	$.ajax('/ArchtionMovements/public/assets/functions/ajaxes/search_project.php', {
	    type: 'POST',  // http method
	    data : new FormData(this),  // data to submit
	    contentType:false,
        processData:false,
	    success: function (data, status, xhr) {
	    	if(data.success){
				//update front end
				debugger;
				$('#projectsDiv').html("");
				data.projects.forEach( function(valor, indice, array) {
					$('#projectsDiv').append('<div class="col-md-4 pr-3">'+
						'<div class="card mb-4 box-shadow hover_img">'+
							'<a href="publicacion?id=' + valor.p_id + '">'+
								'<img class="card-img-top standarized_img" src="../img/uploads/' + valor.url + '" alt="Card image cap">'+
							'</a>'+
							'<div class="mt-3">'+
								'<div class="row">'+
									'<div class="col-10">'+
										'<h5 class="card-title">' + valor.name + '</h5>'+
										'<h6 class="card-subtitle mb-2 text-muted">' + valor.crated_date.substr(0,10) + '</h6>'+
									'</div>'+
									'<div class="col-2 text-right">'+
										'<h5 class="card-title"><img class="img-fluid premio-icon" src="../img/icons/premio.png"></h5>'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</div>');
				});
	    	}
			else if(data.error == "missing_fields"){
				alert("No se han llenado todos los campos");
			}
			else {
				//TODO no projects found 
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
		    

		      $('.min_img').append("<div class='order_picker' data-name='"+e.target.fileName[0]+"' data-order='"+e.target.fileName[1]+"'><img style='max-height:200px;'  src='"+e.target.result+"' alt='' /></div>");
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