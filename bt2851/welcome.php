<?php
session_start();

	if(isset($_SESSION['index'])) {
		$index = $_SESSION['index'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>Welcome</title>
</head>
<body>
<div class="container">
	<table class="table table-bordered">
		<tr>
			<th>Tên</th>
			<th>Email</th>
			<th>Password</th>
			<th>Địa chỉ</th>
		</tr>
		<tr>
			<td><?= isset($_SESSION['userList'][$index]['name']) ? $_SESSION['userList'][$index]['name'] : '' ?></td>
			<td><?= isset($_SESSION['userList'][$index]['email']) ? $_SESSION['userList'][$index]['email'] : '' ?></td>
			<td><?= isset($_SESSION['userList'][$index]['pswd']) ? $_SESSION['userList'][$index]['pswd'] : '' ?></td>
			<td><?= isset($_SESSION['userList'][$index]['address']) ? $_SESSION['userList'][$index]['address'] : '' ?></td>
		</tr>
	</table>
</div>
</body>
</html>