$(document).ready(function () {
  $("#login").click(function () {
    username = $("#username").val();
    password = $("#password").val();
    $.ajax({
      type: "POST",
      url: "pcheck.php",
      data: "username=" + username + "&password=" + password,
      success: function (html) {
        if (html == "true") {
          $("#add_err1").html(
            '<div class="alert alert-success"> \
									<strong>Authenticated</strong>  \
								</div>'
          );
          window.location.href = "https://www.feedbyme.com";
        } else if (html == "false") {
          $("#add_err1").html(
            '<div class="alert alert-danger"> \
									<strong>Authentication failure.</strong>  \
								</div>'
          );
        } else if (html == "details") {
          $("#add_err1").html(
            '<div class="alert alert-danger"> \
									<strong>Please enter both username and password</strong>  \
								</div>'
          );
        } else if (html == "falsed") {
          $("#add_err1").html(
            '<div class="alert alert-danger"> \
									<strong>Currently system is experiencing some issue.</strong>  \
								</div>'
          );
          console.log("databse conectivity OR query issue");
        } else {
          $("#add_err1").html(
            '<div class="alert alert-danger"> \
									<strong>Error</strong> processing request. Please try again.  \
								</div>'
          );
        }
      },
      beforeSend: function () {
        $("#add_err1").html("loading...");
      },
    });
    return false;
  });
});
