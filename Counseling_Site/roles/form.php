<?php
	include("../includes/header.php");
?>

	<div class="wrapper">
		<form method="post" action="create.php" id="roleForm">
			<fieldset>
				<div class="centerTitle">
					<legend><h1 id="header">Create a new Role</h1></legend>
				</div>
				<label for="name">Name</label>
				<p id="nameError" style="display: none;">Name cannot be blank.</p>
				<input type="text" name="name" placeholder="name" id="name">
				<input type="submit" name="Submit"/>
			</fieldset>
		</form>
	</div><!-- /wrapper -->

<?php
	include("../includes/footer.php");
?>
<script>
window.addEventListener('load', function(event) {
	var roleForm = document.getElementById('roleForm');
	roleForm.addEventListener('submit', function(event) {
		var name = document.getElementById('name');
		if (name.value.length == 0) {
			event.preventDefault();
			var nameError = document.getElementById('nameError');
			nameError.style.display = "block";
			nameError.className = "warning";
		}
	});
});
</script>