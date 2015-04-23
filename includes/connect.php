<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
if ($mysqli->connect_error) {
	die('connection error (' . $mysqli->connect_errno . ')'
		. $mysqli->connect_error);
}
else {
	// echo "Connection made";
}
$mysqli->close();

?>