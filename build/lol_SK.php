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
        <img class="lol-content-image" src="Assets/Images/SK.jpeg" alt="SK">
          <h1>
            The iconic German esports squad is back to challenge Europe’s top teams as they rejoin League of Legends European Championship.
          </h1>
          <p1>
            SK Gaming are founding fathers of esports. What started as a sibling-run Quake clan way back in 1997 has grown into one of the biggest brands in all of competitive gaming, with more than 65 major championships tumbling off the trophy rack. The German team were an early mainstay of professional League of Legends too, gracing the grandest stage of them all in 2012 and 2014, Worlds, and now they’re back with ambitions set to kill. The team claim to have unfinished business in League of Legends European Championship, and are ready for whatever challenge the Rift throws their way. With an illustrious history, expect a vocal fanbase to give the Cologne crew the lethal advantage of momentum right from game one.
          <p2>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
