<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>SMAC Login</title>

  <!--Login Style-->
  <link href="css/login.css" rel="stylesheet">
  
  <!-- Lato Font -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />


</head>

<body>
	<main>
			<div class="form-wrapper">
				<form action="includes/login.inc.php" method="post">
					<div class="form-box">
						<input type="text" name="userName" placeholder="Username">
					</div>
					
					<div class="form-box">
						<input type="password" name="userPassword" placeholder="Password">
						</div>
					
					<div class="form-box">
						<button type="submit" name="loginButton">Login</button>
					</div>
					<div class="form-box">
						<a href="signup.php">Create an account</a>
					</div>
				</form>
			</div>
	</main>
</body>
</html>