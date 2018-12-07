<?php
    session_start();
    require("Config.php"); //MySQL database

    if(!$_SESSION['logged_in'] || !isset($_SESSION['user_rank'])){
        header("Location: Index.php");
    }
    if($_SESSION['user_rank'] != 'admin' && $_SESSION['user_rank'] != 'superadmin'){
        header("Location: Index.php");
    }


?>

<!DOCTYPE html>
<html>
<head>
<?php require('CSS_meta.php'); ?>

</head>
<body>

  <?php require('Header.php'); ?>

  <main role="main">
  <div class="container">
    <div class="row">

      <?php include('Menu.php'); ?>

      <div class="col-md order-md-1 h-100 content adminpanel">
        <h1>Admin Panel</h1>

        <button class="btn btn-outline-warning" onclick="location.href='Adminpanel_userspermissions.php#navbar';">
          Change users' permissions
        </button>

        <button class="btn btn-outline-warning" onclick="location.href='Adminpanel_addnews.php#navbar';">
          Add news
        </button>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
