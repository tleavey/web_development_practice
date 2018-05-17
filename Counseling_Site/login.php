<?php include("includes/header.php") ?>

	<div class="wrapper">
   		<div class="welcome-header">
   				<h1>Login</h1>

		    	<form class="login-form" action="session_new.php" method="POST">
		    	
                <?php errorMessageLogin() ?>
      			
              		<br />
         			<label style="text-align: left;"name="username">Username</label><br />
          			<input type="text" name="username" /><br />
          			<br />
          			<label name="password">Password</label><br />
          			<input type="password" name="password" /><br />
          			<br />
          			<input type="submit" value="Log In" />
          		</form>
   		</div>
   	</div>

<?php include("includes/footer.php") ?>