<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<div class="menu">
  <a class="menu-link" href="Index.php">Smth 1</a>
  <a class="menu-link" href="Index.php">Smth 2</a>
  <a class="menu-link" href="Index.php">Smth 3</a>
  <a  class="menu-link"href="Index.php">Smth 4</a>
  <br>
  <?php if(isset($_SESSION['logged_in'])){ ?>
    <a class="menu-link" href="Userpanel.php">User Panel</a></li>
  <?php if($_SESSION['user_rank'] == 'superadmin' || $_SESSION['user_rank'] == 'admin'){ ?>
    <a class="menu-link" href="Adminpanel.php">Admin Panel</a></li>
  <?php } ?>
  <?php } else { ?>
    <a class="menu-link" href="Register_form.php">Register</a></li>
  <?php } ?>
</div>
