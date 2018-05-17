<?php
	include("../includes/header.php");
	include("../classes/client.class.php");

	$client = new Client(NULL, NULL, NULL, NULL, NULL);

	echo "<div class=\"wrapper\">";
	echo "    <div class=\"main-content\">";

	if($client->deleteClient()){
	 	echo "<h1>Recorded successfully deleted</h1>";
	 	header("Refresh:3; list_clients.php");
	}else {
	 	echo "<h1>Error deleting record: " . $db->error . "</h1>";
		header("Refresh:3; list_clients.php");
	}

	echo "    </div>";
	echo "</div>";

	include("includes/footer.php");

?>