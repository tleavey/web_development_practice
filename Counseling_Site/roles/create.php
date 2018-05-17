<?php
	include("../includes/header.php");
	include("../includes/db_connect.php");
	include("../classes/role.class.php");

	//strings to output on function success/failure
	$success = "Record saved successfully.";
	$failed = "Error: could not save role info.";
	$output = "";

	//create a new role object and pass to it the values from the form
	$new_role = new Role(NULL, $_POST['name']);

	//call our save function and it returns true print success else print failure
	if($new_role->isValid() && $new_role->saveRoleInfo()){
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
	header("Refresh:3; index.php");
?>