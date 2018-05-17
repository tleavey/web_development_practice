<?php 
	include("../includes/header.php");
	include("../includes/db_connect.php");
?>

<div class="wrapper">
	<div class="main-content">

<?php
	//again $db for db.humanoriented.com is db_oneteam
	//$db = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
	$id = $_GET["id"];
	$res = $db->query("SELECT * FROM users WHERE id=$id");
	$row = $res->fetch_assoc();
?>
	<table class="list-table">
		<tr>
			<th><?php echo $row["first_name"] . " " . $row["last_name"]; ?></th>
		</tr>
		<tr>
			<td><strong>Username: </strong><?php echo $row["username"];?></td>
		</tr>
		<tr>
			<td><strong>role_id: </strong><?php echo $row["role_id"]; ?></td>
		</tr>
	</table>

	<?php $db->close(); ?>

	</div>
</div>

<?php include("../includes/footer.php") ?>