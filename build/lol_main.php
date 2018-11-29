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
          <p>League of Legends is a fast-paced, competitive online game that blends the speed and intensity of an RTS with RPG elements. Two teams of powerful champions, each with a unique design and playstyle, battle head-to-head across multiple battlefields and game modes. With an ever-expanding roster of champions, frequent updates and a thriving tournament scene, League of Legends offers endless replayability for players of every skill level.</p>
          <p>League of Legends is one of the largest eSports, with various annual tournaments taking place worldwide. In terms of eSports professional gaming as of June 2016 2016, League of Legends has had $29,203,916 USD in prize money, 4,083 Players, and 1,718 tournaments, compared to Dota 2's $64,397,286 USD of prize money, 1,495 players, and 613 tournaments.</p>
          <p>At the collegiate level, Riot Games sponsors play of the game by college teams in the United States and Canada, offering scholarship money to teams that reach their conference playoffs. Riot organizes their own four regional conferences, but also partners with two NCAA athletic conferences, the Peach Belt Conference and Big Ten Conference, who organize their own conference play based off their existing institutional membership. Additionally, since 2017, the Big Ten has partnered with Riot to provide $35,000 in scholarship funds yearly to each of the Big Ten's 14 member teams and to broadcast play on the conference's own television network, BTN, through 2019.</p>
        </div>
    </div>
  </div>


  <?php include('footer.php'); ?>


  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
