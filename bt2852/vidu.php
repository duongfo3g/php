<?php
	$dataList = [];
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
					<input required="true" type="text" name="fullname" class="form-control">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input required="true" type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>SDT:</label>
					<input required="true" type="tel" name="phone_number" class="form-control">
				</div>
				<div class="form-group">
					<label>Dia Chi:</label>
					<input required="true" type="text" name="address" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-success">Luu</button>
					<button type="reset" class="btn btn-warning">Xoa Form</button>
				</div>
			</form>
		</div>
	</div>
	<div class="card mt-3">
		<div class="card-header bg-info text-white">
			DANH SACH NGUOI DUNG
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>Ten</th>
						<th>Email</th>
						<th>SDT</th>
						<th>Dia Chi</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php
$count = 0;
foreach ($dataList as $item) {
	echo '<tr>
			<td>'.($count + 1).'</td>
			<td>'.$item['fullname'].'</td>
			<td>'.$item['email'].'</td>
			<td>'.$item['phone_number'].'</td>
			<td>'.$item['address'].'</td>
			<td>
				<a href="edit-user.php?id='.$item['id'].'"><button class="btn btn-warning">Sua</button></a>
				<form method="post" action="delete-user.php">
					<input type="hidden" name="id" value="'.$item['id'].'"/>
					<button class="btn btn-danger">Xoa</button>
				</form>
			</td>
		</tr>';
	$count++;
}
?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>