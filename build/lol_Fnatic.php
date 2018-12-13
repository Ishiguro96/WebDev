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

      <div class="col-md order-md-1 h-100 content">
        <img class="lol-content-image" src="Assets/Images/Fnatic.png" alt="Fnatic">
          <h5>
            The reigning kings of Europe return for the 2019 season, fresh from the finals of Worlds.
          </h5>
          <p>
            Fnatic barely need an introduction: the winners of the first ever League of Legends World Championship in 2011 have dominated the European competitive scene ever since, winning seven EU LCS Splits, including both splits in an awe-inspiring 2018 that ended with perhaps the most memorable achievement in European League of Legends history. With an insurmountable legacy already created, it was fitting that Fnatic were the team to see Europe’s return to the biggest stage in League of Legends esports at Worlds in November, becoming the only non-Asian team to make a World Championship final since 2011. LEC teams will have to watch out for readymade world-beaters if they’re to stand even a chance against one of the biggest names in all of European esports.
          </p>
          <br>
          <p class="text-center">
            <a class="Team" id="link" href="https://eu.lolesports.com/en/lec/fnatic.html">Source</a>
          </p>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
