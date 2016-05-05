<?php 
  require_once('connt.php');
  if(!empty($_POST['uname']) and !empty($_POST['upass'])){
	$uname=$_POST['uname'];
	$upass=$_POST['upass'];
	
	$strlenth = strlen($uname);
	$strlenth = strlen($upass);
	
	if($_POST['submit'] != NULL)
	
		{
		
			if($strlenth < 6)
				{
				$msg = "User Name Must be 6 Character!!!!";
				}
			
			if($strlenth < 8)
				{
				$msg = "User password Must be 8 Character!!!!";
				}
				
		else
			{
		$sql="select * from admin where Uname='$uname' and Upass='$upass'";
		$query =mysql_query($sql);
		if($row=mysql_fetch_array($query))
			{
				session_start();
				$_SESSION['uname']= $row['Uname'];
				$_SESSION['upass']= $row['Upass'];
				header('location:kmb/index.php');
			}
		else
			{
		$msg="Login Faild";
			}
	
	}
	
}
	echo "<div style='background:#ADFF2F; width:100%; text-align:center; padding:5px;'>$msg <a href='login.php' style='background:#87CEEB; padding:5px; display:inline-block; border-radius:5px;'>Try Again</a></div>"; 
}else{
?>




<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title> Login Form</title>
<link rel="stylesheet" href="style.css" />
<style>	
			body {
				background: #7f9b4e url(bg2.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {

				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		body,td,th {
	color: #FFFFFF;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="login.php">
<div class="wapper">
  <div id="main">
       	  <div class="form-4">
				    <h1>Login or Register</h1>
				    <p>
				        <label for="login">Username or email</label>
			          <input type="text" name="uname" placeholder="Username or email" required>
				    </p>
				    <p>
			          <label for="password">Password</label>
				        <input type="password" name='upass' placeholder="Password" required> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="submit">
				    </p>      
				</div>
 
	</div>
</div>
</form>
</body>
</html>
<?php } ?>

