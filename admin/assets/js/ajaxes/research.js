$("#create_project").on('submit', function (event) {
	event.preventDefault();
	$.ajax('/ArchtionMovements/admin/assets/functions/ajaxes/create_research.php', {
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

function getCity(e){
	e.preventDefault;
	$.ajax('/ArchtionMovements/admin/assets/functions/ajaxes/getCity.php', {
	    type: 'POST',  // http method
	    dataType:"json",
	    data : {"country_code":$('select[name ="country_code"]').val()},  // data to submit
	    success: function (data, status, xhr) {
	    	if(data.success){
	    		//window.location.href = '/ArchtionMovements/admin/index.php';
    		    var $dropdown = $("select[name ='city']");
    		    var $dropdown_options = $("select[name ='city'] option");
    		    $dropdown_options.each(function() {
				    $(this).remove();
				});
				$.each(data.cities, function() {
				    $dropdown.append($("<option />").val(this.id).text(this.city));
				});
	    	}else{
	    		//TODO: show error
	    	}
	    },
	    error: function (jqXhr, textStatus, errorMessage) {
	            $('p').append('Error' + errorMessage);
	    }
	});
}
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