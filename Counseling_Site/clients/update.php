<?php
	ob_start();
	include("../includes/header.php");
	include("../classes/client.class.php");

	$updateClient = new Client(NULL, NULL, NULL, NULL, NULL);
	$updateClient->listClientInfo($_GET["id"]);

	 if(isset($_POST["update"]))
	 {

	 	if($updateClient->updateClientInfo($_GET["id"], $_POST["first_name"], $_POST["last_name"], $_POST["age"], $_POST["birthday"])){
			echo "<h1> Record Successfully updated </h1>";
			header("Refresh:3; list_clients.php");
		} else {
			echo "ERROR: Could not execute"; //. mysqli_error($db);
			header("Refresh:3; list_clients.php");
		}
	}
?>


<div class="wrapper">
	<form method="post">
    	<table align="center">
    		<tr>
    		<td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $updateClient->first_name; ?>" required /></td>
    		</tr>
    		<tr>
    		<td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $updateClient->last_name; ?>" required /></td>
    		</tr>
    		<tr>
    		<td><input type="text" name="age" placeholder="Age" value="<?php echo $updateClient->age; ?>" required /></td>
    		</tr>
			<tr>
			<td><input type="text" name="birthday" placeholder="Birthday" value="<?php echo $updateClient->birthday; ?>" required /></td>
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
	include("includes/footer.php")
?>
