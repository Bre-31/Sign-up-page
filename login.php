<?php include('server.php') ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width , intial-scale=1.0", name="viewport">
	<meta http-equiv="x-UA-compatible" content="IE-edge">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	
<body>
	<div class="container">
			<form action="signup.php" method="POST">
				<div class="form-group">
					<input type="text" name="username"   placeholder="Username" required >
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="password"  required >
				</div>
				<div class="form-group">
					<input type="submit" id="btn" value="Sign in" name="submit">
				</div>
	</div>
</body>
</html>