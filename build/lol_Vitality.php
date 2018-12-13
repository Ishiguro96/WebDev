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
        <img class="lol-content-image" src="Assets/Images/vitality.png" alt="Vitality">
          <h5>
            The French side have shown that consistency is key. With a second place Summer Split finish and a Worlds appearance in 2018, expectations are high for 2019.
          </h5>
          <p>
            Team Vitality entered professional League of Legends three years ago, spoiling for a fight. Nothing has quite scratched that itch for the squad – not rising to the top of European rankings, not qualifying for Worlds this year, not even beating Gen.G Esports, the 2017 world champions, at the first attempt. Team Vitality doesn't like to follow the generic meta. Their powerful early game strategy often calls for ganging up for a spot of group fisticuffs and good old dives. Their creativity also allows some incredible macro plays and you can expect a backdoor coming from nowhere at anytime, leaving their opponents feeling anything but vitalised. Any LEC teams hoping to trump them will have to overcome the sheer brute force of their powerful early game strategy. Good luck to them.
          </p>
          <br>
          <p class="text-center">
            <a class="Team" id="link" href="https://eu.lolesports.com/en/lec/vitality.html">Source</a>
          </p>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
