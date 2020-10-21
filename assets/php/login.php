<?php
$login_email = $_POST["email"];
$password = $_POST["password"];

if(count($_POST) > 0) {
	require_once("db.php");
	$sql_select = "SELECT user_id, fname, lname, email FROM User WHERE email = '". $login_email. "' AND passwrd = '". $password. "'";
	$result = mysqli_query($conn,$sql_select);
	if(mysqli_num_rows($result) > 0 ) {
		while ($row = mysqli_fetch_assoc($result)) {
			$db_id = $row["user_id"];		
			$db_fname = $row["fname"];
               		$db_lname = $row["lname"];
               		$db_email = $row["email"];
		}
		echo "You have successfully signed in!";
	} else {
		echo "Sorry, that username and password is not recognized.";
	}

	mysqli_close($conn);
}
?>
