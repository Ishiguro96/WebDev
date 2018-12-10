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
          <img class="lol-content-image" src="Assets/Images/CS_GO.jpg" alt="LoL">
          <p>Counter-Strike: Global Offensive (CS:GO) expands upon the team-based first person shooter gameplay the original Counter-Strike pioneered when it launched in 1999. Two teams compete in multiple rounds
            of objective-based game modes with the goal of winning enough rounds to win the match.
            CS:GO features new maps, characters, and weapons and delivers updated versions of the classic Counter-Strike maps like Dust, Inferno, Nuke, Train, and more. In addition, CS:GO introduces new game modes like Arms Race,
            Flying Scoutsman and Wingman, and features online matchmaking and Competitive Skill Groups.
          </p>
        </div>
    </div>
  </div>


  <?php include('footer.php'); ?>


  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
