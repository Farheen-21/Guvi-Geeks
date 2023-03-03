$(document).ready(function () {
  
    $("#submit").click(function (e) {
     
            $.ajax({
                type: "POST",
                url: "php/profile.php",
                data:{username: $("#username").val(),password: $("#password").val()},
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