<?php
    session_start();

    require('Config.php');
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

      <div class="col-md order-md-1 h-100 content">


        <?php

          $sql = "SELECT news.ID, news.title, news.author, news.date, news.image, news.content, news_category.description, news.source FROM news INNER JOIN news_category ON news.news_category = news_category.ID WHERE news.news_category='1' ORDER BY date DESC LIMIT 30";
          $query = mysqli_query($db, $sql);

          while($results = mysqli_fetch_assoc($query)){
            ?> <div class="news"> <?php
            $news_id = $results['ID'];
            echo "<h2 id='news_title'>" . $results['title'] . "</h2><hr id='news_hr'>";
            echo "<span id='news_author'>Added by " . $results['author'] . "</span>";
            echo "<span id='news_date'>" . $results['date'] . "</span><br>";
            //echo "<p id='news_cat'>" . $results['description'] . "</p>";
            if($results['image'] != NULL){
              echo "<img id='news_img' src='Assets/Images/" . $results['image'] . "'></img>";
            }
            echo "<p id='news_content'>" . $results['content'] . "</p>";
            if($results['source'] != NULL){
              echo "<a id='news_link' href='" . $results['source'] . "'><i class='fas fa-bookmark'></i>Source</a>";
            }

            if($_SESSION['user_rank'] == 'admin' || $_SESSION['user_rank'] == 'superadmin'){ ?>
            <div class="form-inline" style="float: right">
              <form action="Adminpanel_editpost.php#navbar" id="editpost" method="post">
                <input type="hidden" name="news_id" value="<?php echo $news_id; ?>">

                <button type="submit" class="btn btn-outline-warning btn-sm">
                  Edit post
                </button>
              </form>

              <form action="Adminpanel_deletepost.php#navbar" id="editpost" method="post">
                <input type="hidden" name="news_id" value="<?php echo $news_id; ?>">

                <button type="submit" class="btn btn-outline-warning btn-sm">
                  Delete post
                </button>
              </form>

            </div>
            <?php } ?>
            </div><br><br><br>
            <?php
          }

        ?>


      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
