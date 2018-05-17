<?php
	include("../includes/header.php");
	include("../classes/role.class.php");

	$list_roles = new Role(NULL,NULL);
	$roles = $list_roles->load();
?>


	<div class="wrapper">
  	    <div class="main-content">
           <table class="list-table">
           <tr>
              <th>Roles</th>
              <th>ID</th>
              <th>Delete</th>
              <th>Edit</th>
           </tr>
           <?php foreach ($roles as $value){
           		echo "<tr>";
                echo "<td>";
                echo $value->name;
                echo "</td>";
                echo "<td>";
                echo $value->id;
                echo "</td>";
                echo "<td>";
                echo "<a style=\"color: red; text-decoration: none; text-align: center;\" href=\"delete.php?id=" . $value->id . "\">X</a>";
                echo "</td>";
                echo "<td>";
                echo "<a style=\"color: Green; text-decoration: none; text-align: center;\" href=\"update.php?id=" . $value->id . "\">&#10003</a>";
                echo "</td>";
				echo "</tr>";
            }
            ?>
            <tr>
              <th><a href="form.php">Create New Role</a></th>
          </tr>
          </table>
    	</div><!-- /content -->";
	</div><!-- /wrapper -->";

<?php	include("../includes/footer.php"); ?>
