<?php
	include("../includes/header.php");
	include("../includes/db_connect.php");
	include("../classes/client.class.php");

	//strings to output on function success/failure
	$success = "Record saved successfully.";
	$failed = "Error: could not save client info.";
	$output = "";


	//this is for reCaptcha verfificaiton 
    $captcha;
  	if(isset($_POST["g-recaptcha-response"])){
        $captcha = $_POST["g-recaptcha-response"];
    }
        
    if(!$captcha){
      	echo "<h2>Please check the the captcha form.</h2>";
      	exit;
    }

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdDRAwUAAAAAN_xMeO0l0bPVI4rRduTFRKQsdFS&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]);

    if($response.success == false) {
        echo "<h2>Please try again. </h2>";
    } else {
      	//create a new client object and pass to it the values from the form
		$new_client = new Client($_POST["firstName"], $_POST["lastName"],
		$_POST["age"], $_POST["birthday"]);
    }


	//call our save function and it returns true print success else print failure
	if($new_client->saveClientInfo()) {
		$output = $success;
	} else {
		$output = $failed;
	}

	echo "<div class=\"wrapper\">";
	echo "    <div class=\"main-content\">";
	echo "<h1 style=\"text-align: center;\">"; echo "$output"; echo "</h1>";
	echo "    </div>";
	echo "</div>";

	header("Refresh:2; ../clients/list_clients.php");
	include("../includes/footer.php");
?>
