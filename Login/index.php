<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<form action="login.php" method="post">
		<h2>Sign in!</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Email</label>
		<input type="text" name="email" placeholder="Email"><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit">Login</button>
		<div id="signup">
			<p class="note"><br>New to the Website ? <a class="signup" href="Register.html">Sign Up</a> </p> <!--ente the links later -->
		</div>
	</form>
</body>

</html>