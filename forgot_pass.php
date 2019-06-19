<!DOCTYPE html>
<html>
<head>
    <title>Login to your Account</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatiable" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
    <div class="signin-form">
    	<form action="" method="post">
    		<div class="form-header">
    			<h2>Sign In</h2>
    			<p>Login in to MyChat</p>
    		</div>
    		<div class="form-group">
    			<label>Email</label>
    			<input type="email" name="email"class="form-control" placeholder="example@gmail.com" autocomplete="off" required>
    		</div>
    		<div class="form-group">
    			<label>Password</label>
    			<input type="password" name="pass"class="form-control" placeholder="Enter your password here" autocomplete="off" required>
    		</div>
    		<div class="small">Forgot password?<a href="forgot_pass.php"> Click Here</a></div><br>
    		<div class="form-group">
    			<button type="submit" class="btn btn-primary btn-block btn-lg" name=sign_in>Sign In</button>
    		</div>
    		<?php include("signin_user.php"); ?>
    	</form>
    	<div class="text-center small" style="color: #674288;">Don't have an account <a href="signup.php">Create an account</a></div>
    </div>
</body>
</html>