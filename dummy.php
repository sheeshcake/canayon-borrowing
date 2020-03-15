<?php
  include('controller/connect.php');
  session_start();
  if(isset($_SESSION['row']['user_type'])){
    if($_SESSION['row']['user_type'] == 'admin'){
      header("Location: admin.php");
    }
    else{
    	header("Location: borrowing.php");
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login-style.css">
</head>
<body>
<center>
	<div class="wrapper-title">
		<h1>AVC-Login</h1>
	</div>
	<div class="wrapper">
		<form name="login-form" class="login-form" action="controller/login.php" method="post">
			<div>
				<?php
					if(isset($_GET["login"])){
						echo '<p style="color: red">Error Login!</p>';
					}
				?>
			  <form action="/action_page.php">
			    <label for="password">Usernmae</label>
			    <input type="text" name="username" placeholder="Username">

			    <label for="passowrd">Password</label>
			    <input type="password" name="password" placeholder="Password">
			  
			    <input type="submit" name="submit" value="Submit">
			  </form>
			</div>
		</form>
	</div>
</center>



</body>
</html>