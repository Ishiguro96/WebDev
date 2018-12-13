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
        <img class="lol-content-image" src="Assets/Images/Schalke_04.svg" alt="Schalke">
          <h5>
            The German football club’s League team rose from relegation in 2016 to almost making it to Worlds in 2018. Now they’re looking to double down on their newfound form in the 2019 LEC season.
          </h5>
          <p>
            FC Schalke 04 Esports are done with their tale of redemption. The Royal Blue were relegated in 2016 only to fight their way back to the top, just missing out on a spot at Worlds in 2018 by losing to the mighty Fnatic in the playoff finals. Now the squad are LEC heavyweights instead. With the backing of the German football club’s fans and infrastructure, FC Schalke 04 Esports are set to shake off their comeback story and create another even more inspiring narrative instead in 2019. If they can unlock their roster’s pent-up potential, the team stand to continue Schalke’s century-long winning ways.
          </p>
          <br>
          <p class="text-center">
            <a class="Team" id="link" href="https://eu.lolesports.com/en/lec/schalke04.html">Source</a>
          </p>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
