<?php
if (isset($_SESSION['uid'])) {
	echo "<script>
		window.location='index'
		</script>";
}
// include_once ('header.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CodePen - Sign up / Login Form</title>
	<link rel="stylesheet" href="./assets/signup.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<!DOCTYPE html>
	<html>

	<head>
		<title>Slide Navbar</title>
		<link rel="stylesheet" type="text/css" href="slide navbar style.css">
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	</head>

	<body>
		<div class="main">
			<input type="checkbox" id="chk" aria-hidden="true">
			<div class="" name="signup">
				<form class="form_detail" method="POST" enctype="multipart/form-data">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="text" name="gender" placeholder="Gender" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="file" name="img" placeholder="Profile_Photo" required="">
					<button name="submit" type="submit">Sign up</button>
				</form>
				<a href="login" style="color:white;margin-left: 72px" class="me-5">Back To Login</a>
			</div>
		</div>
	</body>

	</html>
	<!-- partial -->
</body>

</html>