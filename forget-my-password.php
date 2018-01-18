<!DOCTYPE html>
<html>
<head>
	<title>lawrences</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fa/font-awesome.min.css">
	<link rel="stylesheet" href="owl/owl.theme.default.min.css">
	<link rel="stylesheet" href="owl/owl.carousel.min.css">
</head>
<body>
<?php include 'include/header.php' ?>
<div class="register">
	<div class="center clearfix">
		<img src="images/banner-login-register.jpg">
		<div class="register-middle">
			<h1>Forgot your password?</h1>
			<p>Please use the same email address you've<br>
				put while siging in. A password reset link will<br>
				be sent to you.
			</p>
			<h2>Email address:</h2>
			<input type="text">
			
			<div class="forget">
				<a href="login.php">Back to login</a>
				<a href="my-account.php"><input type="submit" name="login" value="submit"></a>
			</div>
		</div>
		<div class="register-last ">
			<h1>Need to register</h1>
			<p>If you wish to place bids online, you will need to create an account.<br><br>

				It only takes a few moments and you will be able to store your delivery details and bidding history for future reference.
			</p>
			<a href="create-my-account.php">create my account</a>
		</div>
	</div>
</div>
<?php include 'include/footer.php' ?>
</body>
</html>