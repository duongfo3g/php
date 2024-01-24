<?php
require_once('config.php');

$fullname = $email = $phoneNumber = $address = "";

if(!empty($_POST)) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phoneNumber = $_POST['phone_number'];
	$address = $_POST['address'];
	$id = $_POST['id'];

	$mydate = date('Y-m-d H:i:s');

	$sql = "update users set fullname = '$fullname', email = '$email', phone_number = '$phoneNumber', address = '$address' where id = ".$id;
	query($sql);

	header('Location: vidu.php');
}

$id = $_GET['id'];
$sql = "select * from users where id = ".$id;
$dataList = select($sql);
$user = $dataList[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quan Ly Nguoi Dung</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Latest compiled JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-header bg-info text-white">
			NHAP THONG TIN NGUOI DUNG
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group">
					<label>Ten:</label>
					<input type="hidden" name="id" value="<?=$id?>">
					<input required="true" type="text" name="fullname" class="form-control" value="<?=$user['fullname']?>">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input required="true" type="email" name="email" class="form-control" value="<?=$user['email']?>">
				</div>
				<div class="form-group">
					<label>SDT:</label>
					<input required="true" type="tel" name="phone_number" class="form-control" value="<?=$user['phone_number']?>">
				</div>
				<div class="form-group">
					<label>Dia Chi:</label>
					<input required="true" type="text" name="address" class="form-control" value="<?=$user['address']?>">
				</div>
				<div class="form-group">
					<button class="btn btn-success">Luu</button>
					<button type="reset" class="btn btn-warning">Xoa Form</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>