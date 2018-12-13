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
        <img class="lol-content-image" src="Assets/Images/Rogue.png" alt="Rogue">
          <h5>
            Big name backing means these European newcomers intend to make a big splash in their first LEC season.
          </h5>
          <p>
            With actively involved investors like EDM legend Steve Aoki and Grammy award winning band (and League of Legends fans) Imagine Dragons, Rogue bring some serious celebrity clout to the table when they make their LEC debut in 2019. Rather than brute force their way up the rankings with big name signings, the team are committed to building a strong, lasting competitive presence through unmatched player development. Imagine Dragons have already graced the Worlds stage after performing the song Warriors for a crowd of 40,000 fans at the League of Legends World Championship in 2014; their team will be setting their sights a repeat performance as a competing squad to lift the trophy.
          </p>
          <br>
          <p class="text-center">
            <a class="Team" id="link" href="https://eu.lolesports.com/en/lec/rogue.html">Source</a>
          </p>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
