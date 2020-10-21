<?php
/* Creates connection to MySQL */

/* Trent db */
// $host = "localhost";
// $user = "trent";
// $pw = "_QotSA:1996!_";
// $db = "app";

/* Common db */
$host = "localhost";
$user = "testuser";
$pw = "testpwd";
$db = "planner_db";

$conn = mysqli_connect($host, $user, $pw, $db);

if (!$conn) {
	die("Mission failed. We'll get 'em next time. " . mysqli_connect_error());
}

?>

