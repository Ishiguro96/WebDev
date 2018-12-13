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
        <img class="lol-content-image" src="Assets/Images/Misfits.png" alt="Misfits">
          <h5>
            Rising through the UK Premiership and the EU Challenger Series all the way to Worlds in 2017, Misfits have proved they’re a force to be reckoned with.
          </h5>
          <p>
            Upon promotion from the EU Challenger series, Misfits Gaming didn’t so much hit the ground running as instantly land at their destination. The very same year they qualified for Worlds through the Summer Playoffs, and made it all the way to the quarterfinals on esports’ biggest stage. Behind a new name lies a squad with depths of experience, and 2018 saw a strong Summer performance once more. Misfits don’t trade in flash plays and suicidal dives, instead holding their ground on the Rift with strong discipline and team coordination that can all too easily creep up on even the strongest of opponents. NBA franchise Miami Heat
            own a stake in Misfits Gaming, and will be hoping to add championship rings of a different type to the trophy cabinet.
          </p>
          <br>
          <p class="text-center">
            <a class="Team" id="link" href="https://eu.lolesports.com/en/lec/misfitsgaming.html">Source</a>
          </p>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
