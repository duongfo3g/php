<?php
	session_start();
	$userList = [];
	if(isset($_SESSION['userList'])) {
		$userList = $_SESSION['userList'];

	}
	if(!empty($_POST)) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pswd = $_POST['pswd'];
		$address = $_POST['address'];

		$user = [
			"name" => $name,
			"email" => $email,
			"pswd" => $pswd,
			"address" => $address
		];

		$userList[] = $user;

		$_SESSION['userList'] = $userList;

		var_dump($_SESSION);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>BT2851</title>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-header bg-info">Sign up</div>
		<div class="card-body">
			<form method="post" action="">
				<div class="mb-3 mt-3">
					<label for="name" class="form-label">Name:</label>
					<input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
				</div>
				<div class="mb-3 mt-3">
					<label for="email" class="form-label">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				</div>
				<div class="mb-3">
				    <label for="pwd" class="form-label">Password:</label>
				    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
				</div>
				<div class="mb-3 mt-3">
					<label for="address" class="form-label">Address:</label>
					<input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
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