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
      else if($_GET['type'] == 'hearthstone'){
        include('hearth_menu.php');
      }
    ?>
    <hr style="background-color: orange">
  <?php } else {?>

  <?php } ?>
  <?php if(isset($_SESSION['logged_in'])){ ?>
    <button class="btn btn-outline-warning" onclick="location.href='Userpanel.php#navbar';">
      User Panel
    </button>
    <br><br>

  <?php if($_SESSION['user_rank'] == 'superadmin' || $_SESSION['user_rank'] == 'admin'){ ?>
    <button class="btn btn-outline-warning" onclick="location.href='Adminpanel.php#navbar';">
      Admin Panel
    </button>
  <?php } ?>
  <?php } else { ?>
    <button class="btn btn-outline-warning" onclick="location.href='Register_form.php#navbar';">
      Register
    </button>
  <?php } ?>
</div>
