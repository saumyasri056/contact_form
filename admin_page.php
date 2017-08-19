	<?php
	session_start();
	?>
	<?php
	include 'config_page.php';
	$err="";
	if(isset($_REQUEST['submit'])&&($_POST['username']!="")&&($_POST['password']!=""))
	{
	 $user=$_POST['username'];
     $pass=$_POST['password'];
	 $query="select * from `admindetails` where `username`='".$user."'";
	 $run=mysql_query($query);
	 $data=mysql_fetch_assoc($run);
	 print_r($data);
	if($pass==$data['password'])
    {
	 $_SESSION["username"]=$data['username'];
	 header('location:all_queries.php');
    }
	else
	{
	 $err="wrong username or password";
	}
	}
	?>
	
	<!DOCTYPE html>
	<html>
	  <head>
		<title>Admin Page</title>
	    <link rel="stylesheet"href="stylesheet.css">
	  </head>
	    <body>
	<center>
		<h1> PLEASE ENTER YOUR DETAILS</h1><hr>
		  <form method="POST" action="admin_page.php">
		<b>USERNAME:</b>
	<input type="text" name="username">
	<br><br>
	<b>PASSWORD:</b>
	<input type="password" name="password"><br>
	<span class="error"><?php echo $err;?>
	</span>
	<br><br>
        <button type="submit" name="submit" value="submit">LOGIN</button>
		<button type="submit" formaction="index.php">CANCEL</button>
           </form>
	    </body>
	</html>