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
        <img class="lol-content-image" src="Assets/Images/lck.jpg" alt="LoL">
        <h1>LCK
        </h1>
        <p>League of Legends Champions Korea (Hangul: 리그 오브 레전드 챔피언스 코리아), commonly abbreviated as LCK, is the primary competition for League of Legends esports in South Korea. Contested by 10 teams, the league runs two seasons per year and serves as a direct route to qualification for the annual League of Legends World Championship. The LCK is administered in cooperation between Riot Games, KeSPA, OGN, and SPOTV Games.

The league was formerly named League Of Legends Champions before undergoing a major restructuring in late 2014, which saw a change in the competition's format and a rebranding to its current name. OGN reserved exclusive broadcasting rights of the league until 2016 when rights were split with SPOTV Games.

The LCK is widely considered to be the strongest League of Legends competition in the world, with the game's World Championship having been won exclusively by teams from the league since 2013. KT Rolster are the current champions, winning their second title, and first since dropping the "Arrows" from their name, on 9 September 2018 after beating Griffin in the finals of LCK Summer 2018.
        </p>
        <p2> Teams below will be placed depending on their place in last splits
        </p2>
        <div class="NA_Teams" >
          <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/griffin">1.Griffin</a>
          <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/kt-rolster">1.KT Rolster</a>
          <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/kingzone-dragonx">3.King-Zone DragonX</a>
          <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/geng">4.Gen. G. eSports/a>
          <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/afreeca-freecs">5.Afreeca Freecs</a>
          <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/hanwha-life-esports">6.Hanwha Life eSports</a>
          <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/sktelecom-t1">7.SK Telecom T1</a>
          <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/jin-air-green-wings">8.Jin Air Greenwings</a>
          <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/mvp">9.MVP</a>
          <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/bbq-olivers">10.BBQ Olivers</a>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
