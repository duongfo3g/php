<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>B1615</title>
</head>
<body>
<?php
	$uname = $email = "";
	if(isset($_GET['username'])) {
		$uname = $_GET['username'];
	}

	if(isset($_GET['email'])) {
		$email = $_GET['email'];
	}
echo $uname.'-'.$email

?>
<form>
<label>User name</label>
<input type="text" name="username" value="<?=$uname?>">
<br></br>
<label>Email</label>
<input type="text" name="email" value="<?=$email?>">
<br></br>
<label>Password</label>
<input type="text" name="password">
<br>
<button type="submit">Submit</button>
<button type="reset">Reset</button>
<button type="button">Button</button>
</form>

</body>
</html>