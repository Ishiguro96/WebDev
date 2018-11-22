<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<div class="col-md-auto order-md-2 submenu h-100" id="submenu" style="border: 1px dashed lime">
  <a id="link" href="lol_news.php">News</a>
  <a id="link" href="lol_leaderboard.php">LEC Leaderboard</a>
  <a id="link" href="lol_teams.php">LEC teams</a>
  <a id="link" href="lol_calendar.php">Calendar</a>
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