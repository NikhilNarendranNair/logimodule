<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
  <title>Join with Us!!!</title>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/switch.js" type="text/javascript"></script>
  <script src="js/register_action.js" type="text/javascript"></script>
  <script src="js/login_action.js" type="text/javascript"></script>
</head>

<body>
  <div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
      <div class="form-header">
        <h1>Account Login</h1>
      </div>
      <div id="add_err1"></div>
      <div class="form-content">
        <form method="post" enctype="application/x-www-form-urlencoded">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required="required" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required="required" />
          </div>
          <div class="form-group">
            <label class="form-remember">
              <p class="form-signup">Sign up</p>
            </label><a class="form-recovery" href="ForgotPassword.php">Forgot Password?</a>
          </div>
          <div class="form-group">
            <button type="submit" id="login">Log In</button>
          </div>
        </form>
      </div>
    </div>
    <div class="form-panel two">
      <div class="form-header">
        <h1>Register Account</h1>
      </div>
      <div id="add_err2"></div>
      <div class="form-content">
        <form method="post" enctype="application/x-www-form-urlencoded">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="usernamer" required="required" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="passwordr" required="required" />
          </div>
          <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" id="cpassword" required="required" />
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" required="required" />
          </div>
          <div class="form-group">
            <button type="submit" id="register">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>