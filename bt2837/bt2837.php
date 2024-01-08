<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BT2837</title>
</head>
<body>
<?php
	$N = rand(3, 15);
	$bookList = [];
	for($i = 0; $i < $N; $i++) {
		$bookList[$i] = [
			"title" => "Book".($i+1),
			"thumbnail" => "Thumb".($i+1),
			"price" => "Price".($i+1)
		];
	}
	echo '<pre>';
	var_dump($bookList);
	echo '</pre>';

	//hiển thị ra table
	echo '<table border="1px">
		<tr>
			<th>Title</th>
			<th>Thumbnail</th>
			<th>Price</th>
		</tr>';
	for($i = 0; $i < $N; $i++) {
		echo '<tr>
		<td>'.$bookList[$i]["title"].'</td>
		<td>'.$bookList[$i]["thumbnail"].'</td>
		<td>'.$bookList[$i]["price"].'</td>
		</tr>';
	};
	echo '</table>';
?>
</body>
</html>