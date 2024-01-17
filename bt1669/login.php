<?php
	if ($_POST['email'] == $_COOKIE['email'] && $_POST['password'] == $_COOKIE['password']) {
		header("Location:welcome.php");
		exit();
	} else {
		echo "Thông tin đăng nhập không chính xác";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BT1669</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header bg-info">
				Login
			</div>
			<div class="card-body">
				<form method="POST" action="">
					<div class="mb-3 mt-3">
					    <label for="email" class="form-label">Email:</label>
					    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					</div>
					<div class="mb-3">
					    <label for="pwd" class="form-label">Password:</label>
					    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
					</div>
					<div class="form-check mb-3">
					    <label class="form-check-label">
					    	<input class="form-check-input" type="checkbox" name="remember"> Remember me
					    </label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>