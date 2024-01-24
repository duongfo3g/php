<?php
require_once('config.php');

$fullname = $email = $phoneNumber = $address = "";

if(!empty($_POST)) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phoneNumber = $_POST['phone_number'];
	$address = $_POST['address'];

	$mydate = date('Y-m-d H:i:s');
	//Xoa phan lay thong POST day len
	// var_dump($_POST);
	//Lam theo nao de day du lieu vao CSDL tu du lieu da nhap o tren
	//B1. Mo ket noi toi CSDL

	// $conn = mysqli_connect('localhost:3307', 'gokisoft', 'iv@*NIFyTdKEgh]D', 'c2307l');
	// $conn = mysqli_connect('localhost:3307', 'root', '', 'c2307l');
	// mysqli_set_charset($conn, 'utf8');

	// //B2. Thuc hien insert du lieu vao CSDL
	// $sql = "insert into users (fullname, email, phone_number, address, created_at, updated_at) values ('TRAN VAN AAA', 'tranvana@gmail.com', '1234567890', 'Ha Noi', '2023-01-02 09:30:00', '2023-01-02 09:30:00')";
	$sql = "insert into users (fullname, email, phone_number, address, created_at, updated_at) values ('$fullname', '$email', '$phoneNumber', '$address', '$mydate', '$mydate')";
	query($sql);
	// mysqli_query($conn, $sql);

	// //B3. Dong ket noi
	// mysqli_close($conn);
}