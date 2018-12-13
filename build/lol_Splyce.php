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
        <img class="lol-content-image" src="Assets/Images/Splyce.jpg" alt="Splyce">
          <h5>
            A fusion of global esports experience and some of Europe’s best League of Legends players mean Splyce pose a serious threat in the first ever LEC season.
          </h5>
          <p>
            From Rift Rivals victories to Worlds qualification, Splyce have done it all – almost. The team have been a central component of the EU LCS for the last three years, placing in the top three in multiple splits and even winning the EU Regional Finals in 2016. As the first ever LEC season kicks off, this hungry and experienced team will be looking to transform their steady success into their first ever overall split victory. Veterans and debutant squads alike will have to watch out for a team that not only revels in mid game team fights, but can also ruthlessly escalate an early lead.
          </p>
          <br>
          <p class="text-center">
            <a class="Team" id="link" href="https://eu.lolesports.com/en/lec/splyce.html">Source</a>
          </p>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
