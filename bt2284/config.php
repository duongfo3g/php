<?php
session_start();

define('HOSTING', 'localhost');
define('USERNAME', 'root');
// define('PWD', 'iv@*NIFyTdKEgh]D');
define('PWD', '');
define('DATABASE', 'gift_db');

/**
* Query: insert, update, delete
*/
function query($sql) {
	// $conn = mysqli_connect('localhost:3307', 'gokisoft', 'iv@*NIFyTdKEgh]D', 'c2307l');
	$conn = mysqli_connect(HOSTING, USERNAME, PWD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//B2. Thuc hien insert du lieu vao CSDL
	// $sql = "insert into users (fullname, email, phone_number, address, created_at, updated_at) values ('TRAN VAN AAA', 'tranvana@gmail.com', '1234567890', 'Ha Noi', '2023-01-02 09:30:00', '2023-01-02 09:30:00')";
	// $sql = "delete from users where id = ".$id;
	mysqli_query($conn, $sql);

	//B3. Dong ket noi
	mysqli_close($conn);
}

function select($sql) {
	$conn = mysqli_connect(HOSTING, USERNAME, PWD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//B2. Thuc hien insert du lieu vao CSDL
	// $sql = "insert into users (fullname, email, phone_number, address, created_at, updated_at) values ('TRAN VAN AAA', 'tranvana@gmail.com', '1234567890', 'Ha Noi', '2023-01-02 09:30:00', '2023-01-02 09:30:00')";
	// $sql = "select * from users";
	$resultset = mysqli_query($conn, $sql);
	$dataList = [];

	while(($row = mysqli_fetch_array($resultset, 1)) !== null) {
		$dataList[] = $row;
	}

	//B3. Dong ket noi
	mysqli_close($conn);

	return $dataList;
}

function md5Security($str) {
	// return md5('Gokisoft.com'.md5($str).'kdjhgfkdjh3245(*&(jhgf873264KJHKJds');
	return password_hash($str, PASSWORD_DEFAULT);
}