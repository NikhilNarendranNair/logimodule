<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
  <title>Forgot Password -Feedbyme</title>
  <script src="js/jquery.js"></script>
  <script src="js/checkEmail.js"></script>
</head>

<body>
  <div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
      <div class="form-header">
        <h1>Enter your email below</h1>
      </div>
      <div id="add_err"></div>
      <div class="form-content">
        <form method="post" enctype="application/x-www-form-urlencoded">
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" required="required" />
          </div>
          <div class="form-group">
            <button type="reset" id="reset">Submit</button>
          </div>
        </form>
      </div>
    </div>
</body>

</html>