<?php
	include("../includes/header.php");
?>

	<div class="wrapper">

	<form method="post" action="create.php">
		<fieldset>
			<div class="centerTitle"><legend><h1 id="header">Create a new User</h1></legend></div>
			<label for="firstName">Firstname</label>
			<input type="text" name="firstName" placeholder="First"/>

			<label for="lastName">Lastname</label>
			<input type="text" name="lastName" placeholder="Last">

			<label for="userName">Username</label>
			<input type="text" name="userName" placeholder="Username">

			<label for="password">Password</label>
			<input type="password" name="password" placeholder="Password">

			<input type="submit" name="Submit"/>
		</fieldset>
	</form>

	</div>


<?php 
	include("../includes/footer.php");
?>