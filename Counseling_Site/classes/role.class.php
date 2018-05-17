<?php
    /*
     * Class Role
     *
     * This role class encapsulates the permissions that will be granted 
     * to each user of the OSU Cascades clinic application. 
     *
     * Each role has an associated ID and name. This class has basic
     * CRUD functions for the roles as well as some utility functions 
     * to list the various roles in a table.
     */
    include("../includes/db_connect.php");

    class Role {

        private static $sql_select = "SELECT * FROM roles ORDER BY name";

        public $id;
        public $name;

        public function __construct($id, $name) {
            $this->id = $id;
            $this->name = $name;
        }

        public function isValid() {
            return preg_match('/\S/', trim($this->name));
        }

        /*
         * The load() function loads all the roles and displays them on the roles screen. 
         *
         * There are no parameters for this function.
         *
         * Returns an array of Role objects based on data in the persistence layer.
         * 
         */
        public static function load() {
            global $db;
            $all_roles = [];
            $results = $db->query(self::$sql_select);

            while ($row = $results->fetch_assoc()) {
                $role = new Role(NULL, NULL);
                $role->id = $row["id"];
                $role->name = $row["name"];
                array_push($all_roles, $role);
            }

            $results->free();
            $db->close();
            return $all_roles;
        }
        /*
         * The saveRoleInfo() function saves a role object to the database. 
         *
         * There are no parameters for this function.
         *
         * Returns a boolean value based on if it succeeded or failed.
         */
        public function saveRoleInfo() {
            global $db;

			//Escapes out of special characters
			$this->id = $db->real_escape_string($this->id);
			$this->name = $db->real_escape_string($this->name);

            //Create the query to save the role
            $save_query = "INSERT INTO roles (id, name) VALUES ('{$this->id}', '{$this->name}')";

            //Check to make sure it worked
            if(mysqli_query($db, $save_query)) {
                return true;
            }   else {
                    return false;
                }
        }
        /*
         * The listRoleInfo() function lists one role when editing a role in the application. 
         *
         * The function takes an integer $id as a parameter to know which specific role to list.
         *
         * Has no return value.
         */
        public function listRoleInfo($id) {
            global $db;

            //create and execute a query
            $results = $db->query("SELECT * FROM roles WHERE id = $id");

            //get the first row of the return from the query
            $row = $results->fetch_assoc();

            $this->id = $row["id"];
            $this->name = $row["name"];
        }
        /*
         * The updateRoleInfo() function allows a user to update the name of a role. 
         *
         * The function takes an integer $id and a string $name as parameters.
         *
         * Returns a boolean value on whether the update succeeded or failed.
         */
        
        public function updateRoleInfo($id, $name) {
            global $db;

            // get the updated values form
            // $this->id = $id;
            // $this->name = $name;
			$this->id = $db->real_escape_string($id);
			$this->name = $db->real_escape_string($name);

            $update_query = "UPDATE roles SET id = '$this->id', name = '$name' WHERE id = $this->name";

            //test to make sure update worked
            if(mysqli_query($db, $update_query)) {
                return true;
            }   else {
                    return false;
                }
        }

        /*
         * The deleteRole() function allows a user to delete a role from the database. 
         *
         * There are no parameters for this function.
         *
         * Returns a boolean value on whether the update succeeded or failed.
         */
        public function deleteRole() {
            global $db;

            //Get the id to be deleted
            $idToDelete = $_GET["id"];

            //Create a query
            $delete_query = $db->query("DELETE FROM roles WHERE id = $idToDelete");

            //Test to see if it was successful
            if($delete_query) {
                return true;
            }   else {
                    return false;
                }
        }



    }

?>
