<!DOCTYPE html>
<html>
<head>
    <title>Create New Account</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatiable" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
    <div class="signup-form">
    	<form action="" method="post">
    		<div class="form-header">
    			<h2>Sign Up</h2>
    			<p>Fill out this form to register with MyChat</p>
    		</div>
            <div class="form-group">
                <label>User name</label>
                <input type="text" name="user_name"class="form-control" placeholder="John" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="user_pass"class="form-control" placeholder="Enter your password here" autocomplete="off" required>
            </div>
    		<div class="form-group">
    			<label>Email</label>
    			<input type="email" name="user_email"class="form-control" placeholder="example@gmail.com" autocomplete="off" required>
    		</div>
            <div class="form-group">
                <label>Country</label>
                <select class="form-group" name="user_country" required>
                    <option disabled="">Select Your Country</option>
                    <option>United States</option>
                    <option>United Kingdom</option>
                    <option>Sri Lanka</option>
                </select>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="form-group" name="user_gender" required>
                    <option disabled="">Select Your Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label class="check-box-inline">
                    <input type="checkbox" required> I accept the <a href="#">Terms of use</a> &amp; 
                    <a href="#">Privacy Policy</a>
                </label>
            </div>
    		<div class="form-group">
    			<button type="submit" class="btn btn-primary btn-block btn-lg" name=sign_up>Sign Up</button>
    		</div>
    		<?php include("signup_user.php"); ?>
    	</form>
    	<div class="text-center small" style="color: #674288;">Already have an account? <a href="signin.php">Log in here</a></div>
    </div>
</body>
</html>