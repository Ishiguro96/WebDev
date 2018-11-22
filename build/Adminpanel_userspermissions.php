<?php
    require('Config.php');

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(ISSET($_POST['username'])){
        $tmp = $_POST['selected_rank'];
        $sql = "SELECT ID, name FROM ranks WHERE description='$tmp'";
        $query = mysqli_query($db, $sql);
        $result = mysqli_fetch_assoc($query);
        $temp = $_POST['username'];
        $temp2 = $result['ID'];
        $sql = "UPDATE users INNER JOIN ranks ON users.rankID = ranks.ID  SET users.rankID='$temp2' WHERE users.username='$temp'";
        $query = mysqli_query($db, $sql);

        if($_SESSION['user_login'] == $_POST['username']){
            $_SESSION['user_rank'] = $result['name'];
        }
      }

      else if(ISSET($_POST['user_ID'])){

        $temp = $_POST['user_ID'];
        $sql = "DELETE FROM users WHERE ID='$temp'";
        $query = mysqli_query($db, $sql);
      }
    }

    if(!$_SESSION['logged_in'] || !isset($_SESSION['user_rank'])){
      header("Location: Index.php");
    }
    if($_SESSION['user_rank'] != 'admin' && $_SESSION['user_rank'] != 'superadmin'){
      header("Location: Index.php");
    }

    $errors = array(); //Array to store errors

    $username = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $username = mysqli_real_escape_string($db, $_POST['search-username']);
    }
    $user_check_query = "SELECT users.ID, users.username, ranks.description, ranks.name FROM users INNER JOIN ranks ON users.rankID = ranks.ID WHERE users.username LIKE '%$username%' ORDER BY users.ID ASC";


    $user_query_result = mysqli_query($db, $user_check_query);

    $available_ranks_query = "SELECT name, description FROM ranks";
    $available_ranks_result = mysqli_query($db, $available_ranks_query);

    $ranks = array();

    while($available_ranks_results = mysqli_fetch_assoc($available_ranks_result)){
        array_push($ranks, $available_ranks_results['description']);
    }

    $iter = 0;


?>

<?php
    session_start();
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

      <div class="col-md-10 order-md-1 h-100 content" style="border: 1px dashed yellow">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="fsearch" method="post">
          <input type="text" placeholder="Search username" name="search-username">
          <button type="submit" class="b-search"><i class="fas fa-search fa-1x"></i></button>
        </form>


        <table class="tsearch">
          <tr>
            <th>Username</th>
            <th>Current Rank</th>
            <th>Edit Rank</th>
            <th>Remove</th>
          </tr>
          <?php
            while($user_results = mysqli_fetch_assoc($user_query_result)){ $iter++; ?>
          <tr>
            <td><p id="table_user"> <?php echo $user_results['username']; ?> </p></th>
            <td><p id="table_rank_desc"> <?php echo $user_results['description']; ?> </p></th>

            <td>
            <form method="post">
              <p id="table_permission">
              <input type="hidden" id="username_form_adminpanel" name="username" value="<?php echo $user_results['username']; ?>">
              <select onchange="this.form.submit()" name="selected_rank" <?php if($user_results['name'] == 'superadmin') echo "disabled"; ?> >

              <?php
                foreach($ranks as $arr){
                  if($arr != "Super Administrator"){
                    if($arr == $user_results['description']){
                      echo "<option selected>" . $arr . "</option>";
                    }
                    else{
                      echo "<option>" . $arr . "</option>";
                    }
                  }
                  else if($user_results['description'] == "Super Administrator"){
                    echo "<option selected>" . $arr . "</option>";
                  }
                } ?>

                </select>
                </p>
              </form>
              </td>
              <td>
                <form method="post" id='deletion<?php echo $user_results['ID']; ?>'>
                  <?php if($user_results['name'] != 'superadmin') { ?>
                  <input type="hidden" id="username_form_adminpanel" name="user_ID" value="<?php echo $user_results['ID']; ?>">
                  <button type="button" onclick="PopUp(<?php echo $user_results['ID']; ?>);"><i class="fas fa-times-circle fa-3x"></i></button>
                  <?php } ?>
                </form>
              </td>

            </tr>
            <?php } ?>
        </table>

      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>


  <script>
  function PopUp(ID) {
      if(confirm("Do you really want to delete this user?")) {
          document.getElementById('deletion' + ID).submit();
      }
  }
  </script>


</body>
</html>
