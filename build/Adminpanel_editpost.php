<?php
    session_start();
    require("Config.php"); //MySQL database

    if(!$_SESSION['logged_in'] || !isset($_SESSION['user_rank'])){
        header("Location: Index.php");
    }
    if($_SESSION['user_rank'] != 'admin' && $_SESSION['user_rank'] != 'superadmin'){
        header("Location: Index.php");
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      //Aktualizacja newsa
      if(isset($_POST['title'])){
        $title2 = mysqli_real_escape_string($db, $_POST['title']);
        $content2 = mysqli_real_escape_string($db, $_POST['content']);
        $category2 = mysqli_real_escape_string($db, $_POST['category2']);
        $author2 = mysqli_real_escape_string($db, $_SESSION['user_login']);
        $image2 = mysqli_real_escape_string($db, $_POST['image']);
        $source2 = mysqli_real_escape_string($db, $_POST['source']);
        $news_id2 = mysqli_real_escape_string($db, $_POST['news_id']);

        $sql3 = "UPDATE news SET title='$title2', content='$content2', author='$author2', news_category='$category2', image='$image2', source='$source2' WHERE news.ID='$news_id2'";
        $query = mysqli_query($db, $sql3);

        header("Location: Index.php#navbar");
      }

      //Pobranie zawartosci starego newsa
      if(isset($_POST['news_id'])){
        $news_id = mysqli_real_escape_string($db, $_POST['news_id']);
        $sql = "SELECT news.ID, news.title, news.author, news.date, news.image, news.content, news.source FROM news INNER JOIN news_category ON news.news_category = news_category.ID WHERE news.ID='$news_id'";
        $query = mysqli_query($db, $sql);
        $results = mysqli_fetch_assoc($query);

        $title = $results['title'];
        $image = $results['image'];
        $content = $results['content'];
        $source = $results['source'];
      }
    }

    $sql2 = "SELECT * FROM news_category";
    $query2 = mysqli_query($db, $sql2);
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

      <div class="col-md order-md-1 h-100 content adminpanel">
        <h1><?php echo $news_id; ?></h1><br>
        <center>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="addnews" class="addnews" method="post">
          <input id="title" name="title" value="<?php echo $title; ?>"></input>

          <hr style="background-color: orange">

          <select id="category2" name="category2">
            <?php while($results2 = mysqli_fetch_assoc($query2)){
              $id2 = $results2['ID'];
              $desc2 = $results2['description'];
              ?>
            <option value="<?php echo $id2; ?>"><?php echo $desc2; ?></option>
          <?php } ?>
          </select><br><br>


          <input id="image" name="image" value="<?php echo $image; ?>"></input>
          <input type="hidden" name="news_id" value="<?php echo $news_id; ?>"></input>
          <hr style="background-color: orange">

          <textarea name="content" rows="10"><?php echo $content; ?></textarea>

          <hr style="background-color: orange">
          <input id="source" name="source" value="<?php echo $source; ?>"></input>
          <hr style="background-color: orange">

        </form>

        <button type="submit" form="addnews" class="btn btn-outline-warning">
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
