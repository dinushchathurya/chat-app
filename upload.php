<!DOCTYPE html>
<?php
session_start();
include("include/connection.php");
/*include("include/header.php");*/

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
<body>
    <?php
       $user = $_SESSION['user_email'];
       $get_user ="select * from users where user_email='$user'";
       $run_user = mysqli_query($con,$get_user);
       $row = mysqli_fetch_array($run_user);

       $user_name = $row ['user_name'];
       $user_profile = $row ['user_profile'];
    ?>
</body>
</html>
<?php } ?>