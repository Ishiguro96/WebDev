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
          <img class="lol-content-image" src="Assets/Images/major_cs.jpg" alt="LoL">
          <p>Katowice was always the most viewed and the most epic Intel® Extreme Masters event.  And as the 2019 Winter Major, it will push its own standard to a brand new level.
            24 of the world’s best teams will come to Katowice to compete for $1,000,000
          </p>
          <p>
            Both the Champions and the Legends Stages will be played in front of live audiences.
            The Katowice International Congress Center will host the four day Legends Stage and the best eight teams from there will play for the championship for four days in front of a full capacity crowd on the iconic stage in Spodek.
          </p>
          <p class="text-center">
            There's kind of a different format in every major so we should take a look a this year rules
          </p>
          <p class="text-center">
            If you would like to be in touch with <a class="Team" id="link" href="https://www.intelextrememasters.com/season-13/katowice/">teams</a> that are qualifying for the event here goes the link.
          <p>
            <img class="lol-content-image" src="Assets/Images/major_format.jpg" alt="LoL">
          </p>
          <br>
          <br>
          <p>
            <a class="Team" id="link" href="https://www.intelextrememasters.com/season-13/katowice/">Source</a>
          </p>
        </div>
    </div>
  </div>


  <?php include('footer.php'); ?>


  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
