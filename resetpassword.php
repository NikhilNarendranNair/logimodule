<?php
$email = $_GET['email'];
$token = $_GET['token'];
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <title>Forgot Password -Feedbyme</title>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/resetpassword.js"></script>
</head>

<body>
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Reset your password:-</h1>
            </div>
            <div id="add_err2"></div>
            <div class="form-content">
                <form method="post" enctype="application/x-www-form-urlencoded">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" id="cpassword" required="required" />
                        <input type='hidden' id='email' value='<?php echo $email; ?>' />
                        <input type='hidden' id='token' value='<?php echo $token; ?>' />
                    </div>
                    <div class="form-group">
                        <button type="submit" id="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>