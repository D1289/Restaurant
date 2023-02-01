


$(document).ready(function() {
    $("#loginButton").click(function(){
      $.post("log_auth.php",
      {
        email: $('#email').val(),
        password: $('#pws').val()
      },
      function(data,status){
        data = jQuery.parseJSON(data);
        if (data.status=='failure') {
          $('#loginErr').text("Invalid Login/Password!!!");
        } else {
          $('#loginblock').hide();
          $('#accountblock').show();
          $('#welcomeuser').text("Hi, " + data.userdata.name);
          $('#modalLRForm').modal('hide');
  
          
        }
      });
    });
  
  
    $("#signup").click(function() {
        $.post("reg_auth.php",
        {
            name:$('#inputName').val(),
            email:$('#inputMail').val(),
            password:$('#inputPws').val()
            
        },
        function(data,status) {
            data = jQuery.parseJSON(data);
            if(data.status == 'failure'){
                $('#registerErr').text(data.response);
                $('#registerSuccess').text("");
            }else{
                $('#registerSuccess').text(data.response);
                $('#registerErr').text("");
  
               
            }
        
    });
  });
  
  
    
  });
  