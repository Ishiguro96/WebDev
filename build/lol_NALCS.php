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

      <div class="col-md order-md-1 h-100 content NA-Teams">
        <img class="lol-content-image" src="Assets/Images/NALCS.jpg" alt="LoL">
        <h1 class="text-center">
          NALCS
        </h1>
        <br>
        <p>As of 2016, 10 teams from North America compete in the North American LCS. Each season is divided into two splits, with opportunities for promotion and relegation preceding each split.
          Regular play in each split in North America consists of 9 weeks of play consisting of 10 games per week. Teams are ranked by win percentage, with ties allowed in regular season.
          For the purpose of seeding playoff positions, a tiebreaker is played to split a tie.
          At the conclusion of each split, a playoff is played to determine the final standings.
          Starting in 2018, the North American LCS will begin to franchise. There are various reasons for this. First, it changed the overall structure of the league, encouraging long-term investments
          from owners. This allowed the league to implement revenue sharing, leading to a better foundation for both the teams and professional players. Lastly, the professional players were given a larger voice and more protection within the league.
          The buy-in price for the league was $10 million for existing League of Legends teams, who had previously participated in the League Championship Series or Challenger Series. New teams would be subject to an
          additional $3 million (a total $13 million), which was distributed to the teams that were replaced in the league. Those 10 teams are placed below in order their standings from last split
          ( more to see <a class="Team" id="link" href="https://www.lolesports.com/en_US/na-lcs/na_2018_summer/standings/regular_season">here</a>).
        </p>
            <br>
            <br>
            <div class="table-responsive table-dark" style="text-align: center;">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th class="align-middle" scope="col">#</th>
                    <th class="align-middle" scope="col">Organisation</th>
                    <th class="align-middle" scope="col">Coach</th>
                    <th class="align-middle" scope="col">logo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="align-middle" scope="row">1</th>
                    <td class="align-middle">
                      <a class="Team" id="link" href="https://www.liquidlegends.net/">Team Liquid</a>
                    </td>
                    <td class="align-middle">Nu-ri "Cain" Jang</td>
                    <td class="align-middle"><img class="TL_logo" src="Assets/Images/TL.png" alt="TL"></td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">2</th>
                    <td class="align-middle">
                      <a class="Team" id="link" href="https://www.cloud9.gg/pages/lol">Cloud9</a>
                    </td>
                    <td class="align-middle"> Han-Gyu "Reapered" Bok</td>
                    <td class="align-middle"><img class="C9_Logo" src="Assets/Images/C9.jpg" alt="C9"></td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">3</th>
                    <td class="align-middle">
                      <a class="Team" id="link" href="https://www.100thieves.com/teams">100 Thieves</a>
                    </td>
                    <td class="align-middle">Prolly</td>
                    <td class="align-middle"><img class="100T_Logo" src="Assets/Images/100T.png" alt="100T"></td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">4</th>
                    <td class="align-middle">
                      <a class="Team" id="link" href="https://www.echofox.gg/teams/league-of-legends-lcs">Echo Fox</a>
                    </td>
                    <td class="align-middle">Inerd</td>
                    <td class="align-middle"><img class="Echo_logo" src="Assets/Images/Echo_.png" alt="Echo_"></td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">5</th>
                    <td class="align-middle">
                      <a class="Team" id="link" href="https://tsm.gg/teams">Team SoloMid</a>
                    </td>
                    <td>Ssong</td>
                    <td class="align-middle"><img class="TSM_logo" src="Assets/Images/TSM.jpg" alt="TSM"></td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">6</th>
                    <td class="align-middle"><a class="Team" id="link" href="https://www.flyquest.gg/">FlyQuest</a></td>
                    <td class="align-middle">SaintVicious</td>
                    <td class="align-middle"><img class="FQ_logo" src="Assets/Images/FQ.png" alt="FQ"></td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">7</th>
                    <td class="align-middle">
                      <a class="Team" id="link" href="https://greenwall.gg/teams">OpTic Gaming</a>
                    </td>
                    <td class="align-middle">Thomas "Zaboutine" Si-Hassen</td>
                    <td class="align-middle"><img class="Optic_logo" src="Assets/Images/OpTic.png" alt="Optic"></td>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">8</th>
                    <td class="align-middle">
                      <a class="Team" id="link" href="https://www.clg.gg/clg-league-of-legends/">Counter Logic Gaming</a>
                    </td>
                    <td class="align-middle">Zach</td>
                    <td class="align-middle"><img class="CLG_logo" src="Assets/Images/CLG.png" alt="CLG"></td>
                  </tr>
                  <tr>
                    <tr>
                      <th class="align-middle" scope="row">9</th>
                      <td class="align-middle">
                        <a class="Team" id="link" href="http://www.clutchlcs.com/">Clutch Gaming</a>
                      </td>
                      <td class="align-middle">Curry</td>
                      <td class="align-middle"><img class="CG_logo" src="Assets/Images/CG.png" alt="CG"></td>
                    </tr>
                  </tr>
                  <tr>
                    <th class="align-middle" scope="row">10</th>
                    <td class="align-middle">
                      <a class="Team" id="link" href="https://www.goldenguardians.com/team">Golden Guardians</a>
                    </td>
                    <td class="align-middle">Inero</td>
                    <td class="align-middle"><img class="GG_logo" src="Assets/Images/GG.png" alt="GG"></td>
                  </tr>
                </tbody>
              </table>
            </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
