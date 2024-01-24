<?php
require_once('config.php');

if(isset($_POST['id'])) {
	$id = $_POST['id'];

	// $conn = mysqli_connect('localhost:3307', 'gokisoft', 'iv@*NIFyTdKEgh]D', 'c2307l');
	// $conn = mysqli_connect('localhost:3307', 'root', '', 'c2307l');
	// mysqli_set_charset($conn, 'utf8');

	//B2. Thuc hien insert du lieu vao CSDL
	// $sql = "insert into users (fullname, email, phone_number, address, created_at, updated_at) values ('TRAN VAN AAA', 'tranvana@gmail.com', '1234567890', 'Ha Noi', '2023-01-02 09:30:00', '2023-01-02 09:30:00')";
	$sql = "delete from users where id = ".$id;
	query($sql);
	// mysqli_query($conn, $sql);

	//B3. Dong ket noi
	// mysqli_close($conn);
}

header('Location: vidu.php');