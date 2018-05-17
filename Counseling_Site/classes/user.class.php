<?php
	/*
	 * Class User
	 *
	 * The User class represents a user of our system. 
	 *
	 * A User can login to the system. A User has access to CRUD operations for all classes. 
	 * A User object can be given a firstName, lastName, userName, and password when created.
	 * The id is automatically set along with the role_id. The role_id can be changed in ../users/update.php
	 */
	
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/db_connect.php';

	class User {
		public $id;
		public $first_name;
		public $last_name;
		public $username;
		public $password;
		public $role_id;
		
		public function __construct($first, $last, $user, $pass) {
			$this->first_name = $first;
			$this->last_name = $last;
			$this->username = $user;
			$this->password = $pass;
		}

		private static $sql_select = "SELECT * FROM users ORDER BY id;";

    	/* 
    	 * This functions retrieves a User's information from the database.
    	 *
		 * Intended to be used to display all users in the system. 
		 *
		 * There are no parameters for this function.
		 *
		 * Returns an array of User objects.
		 */
	
    	public static function loadUsers() {
        	global $db;
        	$all_users = [];
        	$results = $db->query(self::$sql_select);

        	while ($row = $results->fetch_assoc()) {
            	$user = new User(NULL, NULL, NULL, NULL);
            	$user->id = $row["id"];
            	$user->first_name = $row["first_name"];
            	array_push($all_users, $user);
        	}
       		$results->free();
        	$db->close();
        	return $all_users;
    	}

		/* 
		 * This function saves new User information to the database. 
		 * It also escapes special characters stored in the User information and hashes the User's password. 
		 * It is intended to be used to save user information that has just been created. 
		 *
		 * There are no parameters for this function.
		 *
		 * This function will return boolean values TRUE or FALSE
		 * depending on if it was successful in saving to the database.  
		 */
		public function saveUserInfo() {
			global $db;

			//Escapes out of special characters
			$this->first_name = $db->real_escape_string($this->first_name);
			$this->last_name = $db->real_escape_string($this->last_name);
			$this->username = $db->real_escape_string($this->username);
			$this->password = $db->real_escape_string($this->password);
			//encrypts password
			$this->password = password_hash($this->password, PASSWORD_BCRYPT, array(
				'cost' => 12
			));
			//create a query and fill it with passed values
			$save_query = "INSERT INTO users (first_name, last_name, username, password) VALUES ( '{$this->first_name}', '{$this->last_name}', '{$this->username}', '{$this->password}')";

			//error check it
			if(mysqli_query($db, $save_query)) {
	 			return true;
	 		} 	else {
	 				return false;
	 			}
		}

		/* 
		 * This function queries the database and retrives all information for a specific user based on the id.
		 *
		 * This function takes an integer id.
		 *
		 * The function returns all of the queried data into the User object used to call this function.
		 */
		public function listUserInfo($id) {
			global $db;

	 		//create and execute a query
	 		$results = $db->query("SELECT * FROM users WHERE id = $id");

	 		//get the first row of the return from the query
	 		$row = $results->fetch_assoc();

	 		$this->first_name = $row["first_name"];
			$this->last_name = $row["last_name"];
			$this->username = $row["username"];
			$this->password = $row["password"];
			$this->role_id = $row["role_id"];
	 	}

		/* 
		 * This function updates User information in the database. 
		 * It also escapes special characters before updating.
		 *
		 * Parameters: This function takes all the attributes of a User object. id is automatically supplied. 
		 *
		 * Returns: This function will return boolean values TRUE or FALSE depending on if it was successful in saving to the database. 
		 */
		public function updateUserInfo($id, $first, $last, $username, $password, $role_id) {
	 		global $db;

	 		//get the updated values from
			$this->ID = $db->real_escape_string($id);
			$this->first_name = $db->real_escape_string($first);
			$this->last_name = $db->real_escape_string($last);
			$this->username = $db->real_escape_string($username);
			$this->password = $db->real_escape_string($password);
			$this->role_id = $db->real_escape_string($role_id);

			$update_query = "UPDATE users SET first_name = '$this->first_name', last_name = '$this->last_name', username = '$this->username', password = '$this->password', role_id = '$this->role_id' WHERE id = $this->ID";

			//test to make sure update worked
			if(mysqli_query($db, $update_query)) {
				return true;
			}	 else {
					return false;
				}
	 	}

		/* 
		 * This function deletes a User from the database.
		 * It is intended to delete a single specific User. 
		 *
		 * This function takes no parameters. 
		 *
		 * This function returns boolean values TRUE or FALSE depending on if it was sucessful.
		 */
	 	public function deleteUser() {
	 		global $db;

	 		//get the id to be deleted
	 		$idToDelete = $_GET["id"];

	 		//create a query
	 		$delete_query = $db->query("DELETE FROM users WHERE id = $idToDelete");

	 		//test to see if it was successful
	 		if($delete_query) {
	 			return true;
	 		} 	else {
	 				return false;
	 			}
	 	}
	}
?>