<?php
	include("../includes/header.php");
	include("../includes/db_connect.php");
	include("../classes/user.class.php");

	$success = "Record saved successfully.";
	$failed = "Error: could not save user info.";
	$output = "";

	$new_user = new User($_POST["firstName"], $_POST["lastName"],
		$_POST["userName"], $_POST["password"]);

	if($new_user->saveUserInfo()){
		$output = $success;
	} else {
		$output = $failed;
	}

	echo "<div class=\"wrapper\">";
	echo "    <div class=\"main-content\">";
	echo "<h1 style=\"text-align: center;\">"; echo "$output"; echo "</h1>";
	echo "    </div>";
	echo "</div>";

	include("../includes/footer.php");
	header("Refresh:3; list_users.php");
?>
