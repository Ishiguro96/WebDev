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
        <img class="lol-content-image" src="Assets/Images/NALCS.jpg" alt="LoL">
        <p>As of 2016, 10 teams from North America compete in the North American LCS. Each season is divided into two splits, with opportunities for promotion and relegation preceding each split. Regular play in each split in North America consists of 9 weeks of play consisting of 10 games per week. Teams are ranked by win percentage, with ties allowed in regular season. For the purpose of seeding playoff positions, a tiebreaker is played to split a tie.
  At the conclusion of each split, a playoff is played to determine the final standings. The top 3 teams from each group are determined via regular season standings are eligible for the playoffs, with the top 2 teams receiving a bye into the semi-finals. Teams placing 3–6 play each other in quarter-finals to determine who among them play the teams ranked 1 and 2 in the semi-finals. Each split's playoffs award cash prizes and Championship Points, which are used to determine qualification into the annual League of Legends World Championship. The winner of the summer split and the next team with the highest number of Championship Points automatically qualify. The next five teams ranked by Championship Point total then play the Regional Qualifier tournament to determine the final qualifying team.
  The top seven teams of the regular season automatically qualify for the next split. The bottom three teams of the regular season must compete in a promotion tournament with the top two teams of the Challenger Series to determine the remaining three teams for the following split.
  Franchising NA
        </p>
          <p1>Starting in 2018, the North American LCS will begin to franchise. There are various reasons for this. First, it changed the overall structure of the league, encouraging long-term investments from owners. This allowed the league to implement revenue sharing, leading to a better foundation for both the teams and professional players. Lastly, the professional players were given a larger voice and more protection within the league.
  The buy-in price for the league was $10 million for existing League of Legends teams, who had previously participated in the League Championship Series or Challenger Series. New teams would be subject to an additional $3 million (a total $13 million), which was distributed to the teams that were replaced in the league. Interested parties were given applications in June, due on July 28, 2017. Over 100 existing esports organizations, traditional sports teams, venture capitalists and entrepreneurs reportedly applied.]Those applications were then narrowed down to a shortlist, nicknamed "phase two", which saw participants travel to Riot Games' Los Angeles office to interview and review their applications. Riot Games and the North American League Championship Series players' association also decided that league would not expand and instead remain at 10 teams.
          </p1>
            <p2> We have 10 organisations at the moment in NA LCS (they will be presented in order from last split)</p2>
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Organisation</th>
                    <th scope="col">Coach</th>
                    <th scope="col">logo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                      <a class="Team" id="link" href="https://www.liquidlegends.net/">Team Liquid</a>
                    </td>
                    <td >Nu-ri "Cain" Jang</td>
                    <td><img class="TL_logo" src="Assets/Images/TL.png" alt="TL"></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>
                      <a class="Team" id="link" href="https://www.cloud9.gg/pages/lol">Cloud9</a>
                    </td>
                    <td> Han-Gyu "Reapered" Bok</td>
                    <td><img class="C9_Logo" src="Assets/Images/C9.jpg" alt="C9"></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>
                      <a class="Team" id="link" href="https://www.100thieves.com/teams">100 Thieves</a>
                    </td>
                    <td>Prolly</td>
                    <td><img class="100T_Logo" src="Assets/Images/100T.png" alt="100T"></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>
                      <a class="Team" id="link" href="https://www.echofox.gg/teams/league-of-legends-lcs">Echo Fox</a>
                    </td>
                    <td>Inerd</td>
                    <td><img class="Echo_logo" src="Assets/Images/Echo_.png" alt="Echo_"></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>
                      <a class="Team" id="link" href="https://tsm.gg/teams">Team SoloMid</a>
                    </td>
                    <td>Ssong</td>
                    <td><img class="TSM_logo" src="Assets/Images/TSM.jpg" alt="TSM"></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td><a class="Team" id="link" href="https://www.flyquest.gg/">FlyQuest</a></td>
                    <td>SaintVicious</td>
                    <td><img class="FQ_logo" src="Assets/Images/FQ.png" alt="FQ"></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>
                      <a class="Team" id="link" href="https://greenwall.gg/teams">OpTic Gaming</a>
                    </td>
                    <td>Thomas "Zaboutine" Si-Hassen</td>
                    <td><img class="Optic_logo" src="Assets/Images/OpTic.png" alt="Optic"></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>
                      <a class="Team" id="link" href="https://www.clg.gg/clg-league-of-legends/">Counter Logic Gaming</a>
                    </td>
                    <td>Zach</td>
                    <td><img class="CLG_logo" src="Assets/Images/CLG.png" alt="CLG"></td>
                  </tr>
                  <tr>
                    <tr>
                      <th scope="row">9</th>
                      <td>
                        <a class="Team" id="link" href="http://www.clutchlcs.com/">Clutch Gaming</a>
                      </td>
                      <td>Curry</td>
                      <td><img class="CG_logo" src="Assets/Images/CG.png" alt="CG"></td>
                    </tr>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>
                      <a class="Team" id="link" href="https://www.goldenguardians.com/team">Golden Guardians</a>
                    </td>
                    <td>Inero</td>
                    <td><img class="GG_logo" src="Assets/Images/GG.png" alt="GG"></td>
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
