<?php 
	include("includes/header.php");
	include("includes/db_connect.php");
	include("classes/user.class.php");

	if (isset($_POST["username"]) && isset($_POST["password"])) {
		$new_session = validateUser($_POST["username"], $_POST["password"]);

		if($new_session){
			header("Location: index.php"); 
		} else {
				header("Location: login.php");
		}
	}

	include("includes/footer.php");
?>