function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);   
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      console.log("u need to log");
    }
  }


  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '480293539839971',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v10.0'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };
 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=name,email', function(response) {
    	//got already all info needed :)
    	//TODO sent to register
      console.log(response);
      $.ajax('/ArchtionMovements/public/assets/functions/ajaxes/facebook_registration_login.php', {
        type: 'POST',  // http method
        data: {"email":response.email, "password":response.id, "name":response.name},  // data to submit
        success: function (data, status, xhr) {
          if(data.success){
            window.location.href = window.location.href;
          }
        else if (data.error == "user_not_found" || data.error == "pass_incorrect") {
          alert("Email o contraseña incorrectos");
        }
        else if(data.error == "missing_fields"){
          alert("No se han llenado todos los campos");
        }
        else if(data.error == "user_already_registered"){
          alert("Alguien ya se ha registrado con ese correo");
        }
        else {
          alert("¡Error inesperado!");
        }
        },
        error: function (jqXhr, textStatus, errorMessage) {
              alert(errorMessage);
        }
      });
    });
  }
