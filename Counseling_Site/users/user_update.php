<?php
	include("../includes/header.php");
	include("../classes/user.class.php");

	$updateUser = new User(NULL, NULL, NULL, NULL, NULL);
	$updateUser->listUserInfo($_GET["id"]);

	if(isset($_POST["update"])) {

	 	if($updateUser->updateUserInfo($_GET["id"], $_POST["first_name"], $_POST["last_name"], $_POST["username"], $_POST["password"], $_POST["role_id"])){
			echo "<h1> Record Successfully updated </h1>";
			header('Refresh:3; list_users.php');
		} else {
			echo "ERROR: Could not execute"; //. mysqli_error($db);
			header("Refresh:3; list_users.php");
		}
	}
?>


<div class="wrapper">
	<form method="post">
    	<table align="center">
    		<tr>
    		<td><input type="text" name="first_name" placeholder="First Name" value="<?php echo $updateUser->first_name; ?>" required /></td>
    		</tr>
    		<tr>
    		<td><input type="text" name="last_name" placeholder="Last Name" value="<?php echo $updateUser->last_name; ?>" required /></td>
    		</tr>
    		<tr>
    		<td><input type="text" name="username" placeholder="username" value="<?php echo $updateUser->username; ?>" required /></td>
    		</tr>
			<tr>
			<td><input type="text" name="password" placeholder="password" value="<?php echo $updateUser->password; ?>" required /></td>
			</tr>
			<tr>
    		<td><input type="text" name="role_id" placeholder="role_id" value="<?php echo $updateUser->role_id; ?>" required /></td>
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
