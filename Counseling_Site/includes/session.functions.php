<?php
/* Session Functions
 * These functions abstract the details of working with sessions.
*/
	include("db_connect.php");

	/* This function checks to see if any user is logged in at the moment.
	 *
	 * This function takes no parameters.
	 *
	 * This function returns true if a session is set, or returns false if there is no user logged in.
	*/
	function currentUser() {
  		if (isset($_SESSION["user_id"])) {
  			return true;
  		} else return false;
 	}

	/*This function checks to see if a user is logged and if not it will redirect the user to the login page 
	 *if trying to access web pages that requires user login. This function is dependent on predetermined
	 *public_urls that are accessible for public users.
	 *
 	 *This function takes no parameters.
 	 *
 	 *This function does not return anything.
 	 */
  	function redirectIfNotLoggedIn() {
      include("public_urls.include.php");

      if (in_array(basename($_SERVER["REQUEST_URI"]), $allowableURLS) || isset($_SESSION["user_id"])) {
          return;
      } else if (!isset($_SESSION["user_id"])) {
          header("Location: /login.php");
          die();
      }
  	}
    /*This function checks if there are any current sessions, or any users logged in.
	 *
 	 *This function takes no parameters.
 	 *
 	 *This function does not return the session username
 	*/
  	function currentUserName(){
    	if (isset($_SESSION["user_name"])) {
  	 		return $_SESSION["user_name"];
    	} else return NULL;
 	 }

  	/*This function checks to see if username and password entered in the login page match the database user
  	 *name and password in the database to verify user credentials.
	 *
 	 *This functions takes username and password for parameters
 	 *
 	 *This function returns true if credentials are valid or returns false if they do not. 
 	*/
  	function validateUser($username, $password) {
        global $db;

        $query = "SELECT id, password FROM users WHERE username = '$username'";

    	  $result = $db->query($query);

    	if ($result && $result->num_rows == 1) {
      	    $row = $result->fetch_assoc();
      	    $user_id = $row["id"];
            $pass_hash = $row["password"];

            if(password_verify("$password", "$pass_hash")) {
      	        //Declaring global session variables
      	        $_SESSION["user_id"] = $user_id;
      	        $_SESSION["user_name"] = $username;
                return true;
            } 	else {
              		$_SESSION["message"] = "Invalid username/password";
              		return false;
          	  	}
    	} 

    }
    /*This function checks if "message" variable has been set in the session. THis function is dependent
     *on the validateUser() function which will set "message" if credentials are incorrect. The message will
     *echo on the login form "Invalid username/password"
	 *
 	 *This function takes no parameters.
 	 *
 	 *This function does not return anything. Will write error message to screen if login is unsucessful.
 	*/
    function errorMessageLogin(){
       if (isset($_SESSION["message"])) {
          echo $_SESSION["message"];
          unset($_SESSION["message"]);
        } 
    }

?>