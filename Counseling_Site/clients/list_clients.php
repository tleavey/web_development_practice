<?php 
	include("../includes/header.php"); 
	include("../classes/client.class.php");

	$clients = new Client(NULL, NULL, NULL, NULL, NULL);
	$client_info = $clients->listAllClientInfo();
?>

<div class="wrapper">
	<div class="main-content">
	<table class="list-table">
		<tr>
			<th>Name</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
		<?php foreach($client_info as $value) {
			echo "<tr>";
			echo "<td>";
			echo "<a href=\"view_clients_info.php?id=" . $value->ID . "\">";
			echo $value->first_name . " " . $value->last_name;
			echo "</a>";
			echo "</td>";
			echo "<td>";
			echo "<a style=\"color: red; text-decoration: none; text-align: center;\" href=\"delete.php?id=" . $value->ID . "\">X</a>";
			echo "</td>";
 			echo "<td>";
 			echo "<a style=\"color: Green; text-decoration: none; text-align: center;\" href=\"update.php?id=" . $value->ID . "\">&#10003</a>";
 			echo "</td>";
 			echo "</tr>";
 			}
 		?>
 		<tr>
 			<th><a href="/form.php">Create New Client</a></th>
 		</tr>
	</table>
	</div>
</div>

<?php include("../includes/footer.php") ?>
