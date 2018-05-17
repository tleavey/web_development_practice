<?php
	include("../includes/header.php");
	include("../classes/role.class.php");

	$role = new Role("","");

	echo "<div class=\"wrapper\">";
	echo "<div class=\"main-content\">";

	if($role->deleteRole()){
	 	echo "<h1>Record successfully deleted</h1>";
	 	header('Refresh:3; index.php');
	}else {
	 	echo "<h1>Error deleting record: " . $db->error . "</h1>";
		header('Refresh:3; index.php');
	}

	echo "</div>";
	echo "</div>";

	include("../includes/footer.php");
?>