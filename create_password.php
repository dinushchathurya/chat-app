<!DOCTYPE html>
<html>
<head>
    <title>Recover Your Account</title>
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
    			<h2>Create new password</h2>
    			<p>MyChat</p>
    		</div>
    		<div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="pass1"class="form-control" placeholder="password" autocomplete="off" required>
            </div>
    		<div class="form-group">
    			<label> Enter Password</label>
    			<input type="password" name="pass2"class="form-control" placeholder="password" autocomplete="off" required>
    		</div>
    		
    		<div class="form-group">
    			<button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Change</button>
    		</div>
    	</form>
        <?php
             session_start();
             include("include/connection.php");
             if(isset($_POST['change'])){
                 $user = $_SESSION['user_email'];
                 $pass1 = $_POST['pass1'];
                 $pass2 = $_POST['pass2'];

                if($pass1 != $pass2){
                  echo"
                   <div class='alert alert-danger'>
                      <strong>New password and confirm password should be same!</strong> 
                   </div>
                ";
                }
                if($pass1 < 9 AND $pass2 < 9 ){
                   echo"
                   <div class='alert alert-danger'>
                       <strong>USe 9 or more than 9 characters.</strong>
                   </div>
                ";
                }
                if ($pass1 == $pass2){
                     $update_pass = mysqli_query($con, "update users SET user_pass='$pass1' where user_email='$user'");
                     session_destroy();
                    
                     echo "<script>alert('Go ahead and SignIn.')</script>";
                     echo "<script>window.open('signin.php', '_self')</script>";
                }
            
            }


        ?>
</body>
</html>