<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<div class="col-md-auto order-md-2 submenu h-100" id="submenu">
  <a id="link" href="cs_news.php">News</a>
  <a id="link" href="cs_major.php">Katowice Major 2019</a>
  <a id="link" href="cs_ple.php">PLE</a>
  <a id="link" href="cs_polish.php">Polish Organisations</a>
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
