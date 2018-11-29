<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<?php
  if(isset($_SESSION['logged_in'])){ ?>

    <h5 id="welcome-par">Hello, <?php echo $_SESSION['user_login']; ?></h5>
    <button class="btn btn-outline-warning btn-sm" onclick="window.location.href='Logout.php'">Logout</button>

  <?php } else { ?>

    <form class="form-inline justify-content-center" action = "Login.php#logo" method = "post">
      <input class="form-control-sm mr-sm-2" type = "text" name = "username" class = "box" placeholder="Username"/><br><br>
      <input class="form-control-sm mr-sm-2" type = "password" name = "password" class = "box" placeholder="Password"/><br><br>
      <button class="btn btn-outline-warning btn-sm" type="submit"><i class="fas fa-sign-in-alt"></i></button>
    </form>

  <?php } ?>
