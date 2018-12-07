<?php
    session_start();
    require("Config.php"); //MySQL database

    if(!$_SESSION['logged_in'] || !isset($_SESSION['user_rank'])){
        header("Location: Index.php");
    }
    if($_SESSION['user_rank'] != 'admin' && $_SESSION['user_rank'] != 'superadmin'){
        header("Location: Index.php");
    }

    //Dodanie nowego newsa do bazy danych
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $title = mysqli_real_escape_string($db, $_POST['title']);
      $content = mysqli_real_escape_string($db, $_POST['content']);
      $category = mysqli_real_escape_string($db, $_POST['category']);
      $author = mysqli_real_escape_string($db, $_SESSION['user_login']);
      $image = mysqli_real_escape_string($db, $_POST['image']);
      $source = mysqli_real_escape_string($db, $_POST['source']);

      $sql = "INSERT INTO news (title, content, author, news_category, image, source) VALUES ('$title', '$content', '$author', '$category', '$image', '$source')";
      $query = mysqli_query($db, $sql);

      header("Location: Index.php#navbar");
    }



    $sql = "SELECT id, description FROM news_category";
    $query = mysqli_query($db, $sql);
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
        <h1>Add News</h1><br>
        <center>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="addnews" class="addnews" method="post">
          <input id="title" name="title" placeholder="Title"></input>

          <hr style="background-color: orange">

          <select id="category" name="category">
            <?php while($results = mysqli_fetch_assoc($query)){
              $id = $results['id'];
              $desc = $results['description'];
              ?>
            <option value="<?php echo $id; ?>"><?php echo $desc; ?></option>
          <?php } ?>
        </select><br><br>


          <input id="image" name="image" placeholder="Image"></input>
          <hr style="background-color: orange">

          <textarea name="content" rows="10" placeholder="Content"></textarea>

          <hr style="background-color: orange">
          <input id="source" name="source" placeholder="Source"></input>
          <hr style="background-color: orange">

        </form>

        <button type="submit" form="addnews" class="btn btn-outline-warning" onclick="location.href='Adminpanel_addnews.php#navbar';">
          Submit
        </button>
        </center>

      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
