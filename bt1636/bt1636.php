<?php
$arr = [];
$N = rand(1, 100);
for ($i = 0; $i < $N; $i++) {
	$arr[] = rand(1, 100);
}
for ($i=0; $i < sizeof($arr); $i++) {
	echo '<br/>'.$arr[$i].'<br/>';
	// print('<br/>print: '.$arr[$i].'<br/>');
}
?>