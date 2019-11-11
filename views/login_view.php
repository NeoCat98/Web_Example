<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SED ACCOUNT | LOG IN</title>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container-form">
		<div class="header">
			<div class = "menu">
				<a href="login.php">LOG IN</a>
				<a href="create.php">CREATE AN ACCOUNT</a>
			</div>
		</div>
	</div>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
		<div class = "user input">
			<input type="text" name="username" placeholder="username" required>
		</div>
		<div class = "password input">
			<input type="password" name="password" placeholder="password" required>
		</div>
		<button type="submit">LOG IN</button>
	</form>
	<?php
        echo $error;
    ?>
	<script type="js/jquery.js"></script>
	<script type="js/script.js"></script>
</body>
</html>