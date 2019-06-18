<!DOCTYPE html>
<?php
session_start();
include("find_friends_function.php");

if(!isset($_SESSION['user_email'])){
	header("location:signin.php");
}
else{ ?>
<html>
<head>
	<title>Search For Friends.</title>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
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
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
       <a class="navbar-brand" href="#">
           <?php 
             $user = $_SESSION['user_email'];
             $get_user = "select * from users where user_email='$user'";
             $run_user = mysqli_query($con,$get_user);
             $row = mysqli_fetch_array($run_user);

             $user_name =$row['user_name'];
             echo"<a class='navbar-brand' href='../home.php?user_name=$user_name'>MyChat</a>" ;
            ?> 
        </a>
        <ul class=navbar-nav">
            <a style="color: white;text-decoration:none;font-size: 25px;"href="../account_setting.php">Settings</a></li>
        </ul>        
   </nav><br> 
   <div class="row">
       <div class="col-sm-4">
       </div>
       <div class="col-sm-4">
           <form class="search_form" action="">
               <input type="text" name="search_query" placeholder="Search Friends" autocomplete="off" required>
               <button class="btn" type="submit" name="search_btn">Search</button>
           </form>    
       </div>
       <div class="col-sm-4">
       </div>
   </div><br><br>
   <?php search_user(); ?>
</body>
</html>
<?php } ?>