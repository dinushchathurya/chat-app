<!DOCTYPE html>
<html>
<head>
	<title>MyChat- HOME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
     <div class="container main-section">
     	<div class="row">
     		<div class="col-md col-sm-3 col-xs-12 left-sidebar">
     			<div class="input-group searchbox">
     				<div class="input-group-btn">
     					<center>
     						<a href="include/find_friends.php">
     							<button class="btn btn-default search-icon" name="search_user" type="submit">Add new user</button>
     						</a>
     					</center>
     				</div>
     			</div>
     			<div class="left-chat">
     				<ul>
     					<?php include("include/get_users_data.php"); ?>
     				</ul>
     			</div>
     		</div>
     		<div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
     			<div class="row">
     				<?php $user= $_SESSION['user_email'];
     				$get_user = "select * from users where user_email='$user'"; 
     				$run_user=mysqli_query($con,$get_user);
     				$row =mysqli_fetch_array($run_user);
     				$user_id = $row['user_id'];
     				$user_name = $row['user_name'];
     				?>
     				<?php
     				 if(isset($GET['user_name'])){
     				 	global $con;
     				 	$get_username = $_GET['user_name'];
     				 	$get_user="select * from users where user_name='$get_username'";
     				 	$run_user= mysqli_query($con,$get_user);
     				 	$row_user = mysqli_fetch_array('$run_user');
     				 	$user_name= $row_user['user_name'];
     				 	$user_profile_image =$row_user['user_profile'];
     				 }
     				 $total_messages ="select *from users_chats where (sender_username='$user_name' AND receiver_username='$user_name') OR (receiver_username='$user_name AND sender_username='$user_name')";
     				 $run_messages =mysqli_query($con, $total_messages);
     				 $total = mysqli_num_rows($run_messages);
     				?>
     				<div class="col-md-12" right-header>
     					<div class="right-header-img">
     						<img src="<?php echo"$user_profile_image";?>">

     					</div>
     					<div class="right-header_detail">
     						<form method="post">
     							<p><?php echo "$user_name";?></p>
     							<span></span>
     						</form>
     					</div>
     				</div>
     			</div>
     		</div>
     	</div>
     </div>
</body>
</html>