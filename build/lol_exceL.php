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
        <img class="lol-content-image" src="Assets/Images/exceL.png" alt="ExceL">
          <h5>
            One of the biggest names in British esports cross the channel with ambition to establish themselves as major contenders in the inaugural LEC season.
          </h5>
          <p>
            British squad exceL Esports are no strangers to elite League of Legends competition. The team have dominated domestic leagues and tournaments in the United Kingdom for the past couple of years and are now looking to make their mark with their never-say-die attitude on Europe’s biggest stage of all in their LEC debut. With experience across multiple games, and backing from the owners of some of the Pacific’s biggest esports franchises, exceL have the will, talent, dedication and setup to make sure their journey to the European mainland will be a success.
          </p>
          <br>
          <p class="text-center">
            <a class="Team" id="link" href="https://eu.lolesports.com/en/lec/excelesports.html">Source</a>
          </p>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
