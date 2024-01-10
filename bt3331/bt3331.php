<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BT3331</title>
</head>
<body>
<?php
	function displaybooks($bookList) {
		echo '<pre>';
		var_dump($bookList);
		echo '</pre>';
	}
	$N = rand(2, 10);
	$bookList = [];
	for ($i = 0; $i < $N; $i++) {
		$bookList[$i] = [
			"title" => "Book".($i+1),
			"price" => "Price".($i+1)
		]
	};
	displaybooks($bookList);
?>
</body>
</html>