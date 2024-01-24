<?php
define('HOSTING', 'localhost');
define('USERNAME', 'root');
define('PWD', '');
define('DATABASE', 'c2307l');

function query($sql) {
	$conn = mysqli_connect(HOSTING, USERNAME, PWD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//B2. Thuc hien insert du lieu vao CSDL
	mysqli_query($conn, $sql);

	mysqli_close($conn);
}

function select($sql) {
	$conn = mysqli_connect('localhost:3307', 'root', '', 'c2307l');
	mysqli_set_charset($conn, 'utf8');

	//B2. Thuc hien insert du lieu vao CSDL
	$resultset = mysqli_query($conn, $sql);
	$dataList = [];

	while(($row = mysqli_fetch_array($resultset, 1)) !== null) {
		$dataList[] = $row;
	}

	//B3. Dong ket noi
	mysqli_close($conn);

	return $dataList;
}