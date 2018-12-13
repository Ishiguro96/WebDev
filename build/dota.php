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

      <div class="col-md order-md-1 h-100 content" id="content">
        <img class="lol-content-image" src="Assets/Images/dota2.jpg" alt="dota">
            <p>
              Dota 2 is a sequel to Dota or Defense of the Ancients, which was a user-created map for Warcraft 3. For more on the evolution of Dota see Dota History. Dota and Dota 2 have been classified by many as MOBA games, or Multiplayer Online Battle Arena games.
            </p>
            <p>
              NOTE: Dota 2 is a deep and robust game with a steep learning curve. It is highly recommended that you explore the tutorial mode, play with bots, and  read some introductions before you jump in and play. The average game of Dota 2 lasts 45-50 minutes. It is highly detrimental to other player's game experience if you leave before finishing the game and is heavily frowned upon.
            </p>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
