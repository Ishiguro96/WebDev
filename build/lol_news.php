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

          $sql = "SELECT * FROM news INNER JOIN news_category ON news.news_category = news_category.ID WHERE news.news_category = '1' ORDER BY date DESC LIMIT 30";
          $query = mysqli_query($db, $sql);

          while($results = mysqli_fetch_assoc($query)){
            ?> <div class="news"> <?php
            echo "<h2 id='news_title'>" . $results['title'] . "</h2><hr id='news_hr'>";
            echo "<span id='news_author'>Added by " . $results['author'] . "</span>";
            echo "<span id='news_date'>" . $results['date'] . "</span><br>";
            //echo "<p id='news_cat'>" . $results['description'] . "</p>";
            echo "<img id='news_img' src='Assets/Images/" . $results['image'] . "'></img>";
            echo "<p id='news_content'>" . $results['content'] . "</p>";
            if(!is_null($results['source'])){
              echo "<a id='news_link' href='" . $results['source'] . "'><i class='fas fa-bookmark'></i>Source</a>";
            }
            ?> </div><br><br><br> <?php
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
