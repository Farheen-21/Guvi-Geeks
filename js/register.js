$(document).ready(function () {
  
    $("#submit").click(function (e) {
     
            $.ajax({
                type: "POST",
                url: "php/register.php",
                data:{username: $("#username").val(),password: $("#password").val(),email: $("#email").val(),contact: $("#contact").val(),dob: $("#dob").val(),age: $("#age").val(),domain: $("#domain").val()},
                success: function (msg) {
                        $("#message").html(msg);
                },
                error: function (req, status, error) {
                    alert(req + " " + status + " " + error);
                }
            });
        
        return false;
    });
  
  
    function Validate() {
        return true;
    }
  });