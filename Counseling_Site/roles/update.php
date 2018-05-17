<?php
	include("../includes/header.php");
	include("../classes/role.class.php");

	$updateRole = new Role(NULL, NULL);
	$updateRole->listRoleInfo($_GET["id"]);

	if(isset($_POST["update"])) {

	 	if($updateRole->updateRoleInfo($_GET["id"], $_POST["name"])) {
			echo "<h1> Record Successfully updated </h1>";
			header("Refresh:3; index.php");
		} 	else {
				echo "ERROR: Could not execute"; //. mysqli_error($db);
				header("Refresh:3; index.php");
			}
	}
?>

<div class="wrapper">
	<form method="post">
    	<table align="center">
    		<tr>
    		<td><input type="text" name="name" placeholder="Name" value="<?php echo $updateRole->name; ?>" required /></td>
    		</tr>
    		<tr>
    		<td>
    		<button type="submit" name="update"><strong>UPDATE</strong></button>
    		</td>
    		</tr>
    	</table>
    </form>
</div>

<?php
	include("../includes/footer.php")
?>
