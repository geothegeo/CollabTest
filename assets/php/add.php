<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];

if(count($_POST) > 0) {
	require_once("db.php");
	$sql_insert = "INSERT INTO User (fname, lname, email, passwrd) VALUES ('" . $fname . "','" . $lname . "','" . $email . "','". $password . "')";
	mysqli_query($conn,$sql_insert);
	$cur_id = mysqli_insert_id($conn);
	if(!empty($cur_id)) {
		echo $fname . " " . $lname . " has successfully signed up for a new account";
	} else {
		echo "Sorry, something went wrong";
	}

	mysqli_close($conn);
}
?>
