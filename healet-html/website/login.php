<?php
if (isset($_SESSION['uid'])) {
	echo "<script>
		window.location='index'
		</script>";
}
// include_once ('header.php');
?>



<!DOCTYPE php>
<php lang="en">

	<head>
		<meta charset="UTF-8">
		<title>CodePen - Sign up / Login Form</title>
		<link rel="stylesheet" href="./assets/signup.css">

	</head>

	<body>
		<!-- partial:index.partial.php -->
		<!DOCTYPE php>
		<php>

			<head>
				<title>Slide Navbar</title>
				<link rel="stylesheet" type="text/css" href="slide navbar style.css">
				<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
			</head>

			<body>
				<div class="main">
					<input type="checkbox" id="chk" aria-hidden="true">

					<div class="">
						<form class="form_detail" method="POST" enctype="multipart/form-data">
							<label for="chk" aria-hidden="true">Login</label>
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="password" placeholder="Password" required="">
							<button name="submit" type="submit">Login</button>
						</form>
						<a href="signup" style="color:white;margin-left: 72px" class="me-5">If Not Registered ! Sign
							Up</a>
					</div>
				</div>
			</body>

		</php>
		<!-- partial -->
	</body>

</php>