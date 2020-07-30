$(document).ready(function () {
  $("#submit").click(function (e) {
    e.preventDefault();
    email = $("#email").val();
    token = $("#token").val();
    password = $("#password").val();
    cpassword = $("#cpassword").val();
    if (password == cpassword) {
      $.ajax({
        type: "POST",
        url: "reset.php",
        data: "password=" + password + "&email=" + email + "&token=" + token,
        success: function (html) {
          if (html == "true") {
            $("#add_err2").html(
              '<div class="alert alert-success"> \
                            <strong>Your password has been updated.</strong>  \
                            </<div>'
            );
            window.location.href =
              "https://www.feedbymehttp://feedbyme.epizy.com/";
          } else if (html == "pshort") {
            $("#add_err2").html(
              "<div> \
                         <strong>Password</strong> must be at least 4 characters .  \
                         </div>"
            );
          } else {
            $("#add_err2").html(
              "<div> \
                           <strong>Errorsss</strong> processing request. Please try again.  \
                           </div>"
            );
          }
        },
      });
    } else {
      $("#add_err2").html(
        "<div> \
            <strong>raj</strong> processing request. Please try again.  \
            </div>"
      );
    }
  });
});
