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
        <img class="lol-content-image" src="Assets/Images/lpl.png" alt="LoL">
        <h1>LPL
        </h1>
        <p2>The Tencent League of Legends Pro League (LPL) is the premier League of Legends esports competition in China. The LPL features 14 teams split into two divisions of 7 teams each.
        </p2>
        <p3> I will divide those teams as mentioned before and from the best to the wrost in each conferrence - standings from last splits
        </p3>
        <p4>Group A
        </p4>
          <div class="LPLA_Teams" >
              <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/invictus-gaming">1.Invictus Gaming</a>
              <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/royal-never-give-up">2.Royal Never Give Up</a>
              <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/qg-reapers">3.JD Gaming</a>
              <a class="Team" id="link" href="https://lol.gamepedia.com/Suning_Gaming">4.Sunning Gaming</a>
              <a class="Team" id="link" href="https://lol.gamepedia.com/LGD_Gaming">5.LGD Gaming</a>
              <a class="Team" id="link" href="https://lol.gamepedia.com/Bilibili_Gaming">6.Bilibili Gaming</a>
              <a class="Team" id="link" href="https://lol.gamepedia.com/Vici_Gaming">7.Vici Gaming</a>
          </div>
        <p5>Group B
        </p5>
          <div class="NA_Teams" >
            <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/rogue-warriors">1.Rogue Warriors</a>
            <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/edward-gaming">2.Edward Gaming</a>
            <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/topsports-gaming">3.TopSports Gaming</a>
            <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/funplus-phoenix">4.Funplus Pheonix</a>
            <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/snake">5.Snake eSports</a>
            <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/team-we">6.Team WE</a>
            <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/omg">7.Oh My God</a>
          </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
