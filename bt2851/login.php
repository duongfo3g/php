<?php
session_start();

$userList = [];

if(isset($_SESSION['userList'])) {
	$userList = $_SESSION['userList'];
}


// Kiểm tra xem người dùng đã submit form hay chưa
if(!empty($_POST)) {
	$email = $_POST['email'];
	$pswd = $_POST['pswd'];
	$check = 0;
	$index = 0;

	// Kiểm tra xem thông tin đăng nhập có đúng hay không (giả sử đã đăng ký trước đó)
	foreach($userList as $user) {
		if($user['email'] === $email && $user['pswd'] === $pswd) {
			$check = 1;
			break;
		}
		$index ++;
	}
		if($check == 1) {
			$_SESSION['index'] = $index;
			header('Location: welcome.php');
			exit();
		} else {
		echo 'Thông tin đăng nhập chưa chính xác';
		}
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
	<title>Login</title>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-header bg-info">Login</div>
		<div class="card-body">
			<form method="post" action="">
				<div class="mb-3 mt-3">
					<label for="email" class="form-label">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				</div>
				<div class="mb-3">
				    <label for="pwd" class="form-label">Password:</label>
				    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>