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

        <div class="col-md order-md-1 h-100 content lol-content" >
          <img class="lol-content-image" src="Assets/Images/lolmain.jpg" alt="LoL">
          <p>
            League of Legends is a fast-paced, competitive online game that blends the speed and intensity of an RTS with RPG elements. Two teams of powerful champions, each with a unique design and playstyle,
            battle head-to-head across multiple battlefields and game modes. With an ever-expanding roster of champions, frequent updates and a thriving tournament scene, League of Legends offers endless replayability for players of every skill level.
            What's else to say? It's one of the most playable e-sport, which is entertaining people all-over the world. We have professional leagues in every continent and the biggest of them are entitled in other articles. If you want to learn some
            basics <a class="Team" id="link" href="https://eune.leagueoflegends.com/en/game-info/get-started/what-is-lol/">here</a> you have a few guides.
            <br>
            <br>
           </p>
        </div>
    </div>
  </div>


  <?php include('footer.php'); ?>


  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
