<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<div class="col-md-auto order-md-2 submenu h-100" id="submenu">
  <?php if(isset($_GET['type']) ){ ?>
    <?php
      if($_GET['type'] == 'cs') {
        include('cs_menu.php');
      }
      else if($_GET['type'] == 'lol'){
        include('lol_menu.php');
      }
      else if($_GET['type'] == 'dota'){
        include('dota_menu.php');
      }
    ?>
  <?php } else {?>
    <a id="link" href="Index.php">Smth 1</a>
    <a id="link" href="Index.php">Smth 2</a>
    <a id="link" href="Index.php">Smth 3</a>
    <a id="link" href="Index.php">Smth 4</a>
  <?php } ?>
  <hr style="background-color: orange">
  <?php if(isset($_SESSION['logged_in'])){ ?>
    <a id="link" href="Userpanel.php">User Panel</a></li>
  <?php if($_SESSION['user_rank'] == 'superadmin' || $_SESSION['user_rank'] == 'admin'){ ?>
    <a id="link" href="Adminpanel.php">Admin Panel</a></li>
  <?php } ?>
  <?php } else { ?>
    <a id="link" href="Register_form.php">Register</a></li>
  <?php } ?>
</div>
