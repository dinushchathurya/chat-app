<!DOCTYPE html>
<?php
session_start();
include("include/connection.php");
include("include/header.php");

if(!isset($_SESSION['user_email'])){
	header("location:signin.php");
}
else{ ?>
<html>
<head>
	<title>Change Profile Picture</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatiable" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/find_people.css">
</head>
<style>
    body{
        overflow-x:hidden; 
    }
</style>
<body>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <form action="" method="post" enctype="multipart/form-data" >
                <table class="table table-bordered table-hover">
                <tr align="center">
                    <td colspan="6" class="active"><h2>Change Password</h2></td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Current Password</td>
                    <td>
                        <input type="password" name="current_pass"  id="mypass"class="form-control" required placeholder="Current Passsword" />
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">New Password</td>
                    <td>
                        <input type="password" name="u_pass1" id="mypass" class="form-control" required placeholder="New Passsword" />
                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Confirm Password</td>
                    <td>
                        <input type="password" name="u_pass2" id="mypass" class="form-control" required placeholder="Confirm Passsword" />
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="6">
                        <input type="submit" name="change" value="Change" class="btn btn-info" />
                    </td>
                </tr>
            </table>
            </form>
            <?php 
              if(isset($_POST['change'])){
              $c_pass = $_POST['current_pass'];
              $pass1 =  $_POST['u_pass1'];
              $pass2 =  $_POST['u_pass2'];

              $user = $_SESSION['user_email'];
              $get_user ="select * from users where user_email='$user'";
              $run_user = mysqli_query($con,$get_user);
              $row = mysqli_fetch_array($run_user);

              $user_password = $row ['user_pass'];

               if($c_pass !== $user_password){
                echo"
                   <div class='alert alert-danger'>
                      <strong>your old password didn't match!</strong> 
                   </div>
                ";
               }

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
            
            if($pass1 == $pass2 AND $c_pass == $user_password){
            
            $update_pass = mysqli_query($con , "UPDATE users SET user_pass='$pass1' where user_email='$user'");

            echo"
                   <div class='alert alert-danger'>
                      <strong>Password updated successfully.</strong> 
                   </div>
                ";
        }

    }
            ?>
        </div>
        <div class="col-sm-2">
            
        </div>
    </div>
</body>
</html>
<?php } ?>