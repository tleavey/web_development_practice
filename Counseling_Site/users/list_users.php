<?php 
    include("../includes/header.php");
    include("../classes/user.class.php");

    $user = new User(NULL, NULL, NULL, NULL, NULL);
    $users_info = $user->loadUsers();
?>

<div class="wrapper">
  <div class="main-content">
  <table class="list-table">
    <tr>
      <th>Name</th>
      <th>Delete</th>
      <th>Edit</th>
    </tr>
    <?php foreach($users_info as $value) {
      echo "<tr>";
      echo "<td>";
      echo "<a href=\"view_users_info.php?id=" . $value->id . "\">";
      echo $value->first_name . " " . $value->last_name;
      echo "</a>";
      echo "</td>";
      echo "<td>";
      echo "<a style=\"color: red; text-decoration: none; text-align: center;\" href=\"delete.php?id=" . $value->id . "\">X</a>";
      echo "</td>";
      echo "<td>";
      echo "<a style=\"color: Green; text-decoration: none; text-align: center;\" href=\"user_update.php?id=" . $value->id . "\">&#10003</a>";
      echo "</td>";
      echo "</tr>";
      }
    ?>
    <tr>
      <th><a href="form.php">Create New User</a></th>
    </tr>
  </table>
  </div>
</div>

<?php include("../includes/footer.php") ?>