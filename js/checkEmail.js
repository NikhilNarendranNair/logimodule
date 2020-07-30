$(document).ready(function () {
  $("#reset").click(function (e) {
    e.preventDefault();
    email = $("#email").val();
    $.ajax({
      type: "POST",
      url: "checkEmail.php",
      data: "email=" + email,
      success: function (html) {
        if (html == "true") {
          $("#add_err").html(
            '<div class="alert alert-success"> \
							<strong>Please follow link given in email, to reset your password</strong>  \
                            </<div>'
          );
        } else if (html == "eshort") {
          $("#add_err").html(
            "<div> \
               <strong>Email Address</strong> is required.  \
               </div>"
          );
        } else if (html == "eformat") {
          $("#add_err").html(
            "<div> \
          <strong>Email Address</strong> format is not valid.  \
          </div>"
          );
        } else if (html == "err") {
          $("#add_err").html(
            "<div> \
          <strong>Email Address</strong> format is not valid.  \
          </div>"
          );
        } else if (html == "false") {
          $("#add_err").html(
            '<div class="alert alert-danger"> \
                         <strong>Email does not exist in system, please enter valid email id.</strong>  \
                         </div>'
          );
        } else {
          $("#add_err").html(
            '<div class="alert alert-danger"> \
                         <strong>Soemthing went wrong, please try again later.</strong>  \
                         </div>'
          );
        }
      },
    });
  });
});
