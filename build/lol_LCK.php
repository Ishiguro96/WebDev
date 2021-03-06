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
        <img class="lol-content-image" src="Assets/Images/lck.jpg" alt="LoL">
        <h1 class="text-center">
          LCK
        </h1>
        <br>
        <p>League of Legends Champions Korea (Hangul: 리그 오브 레전드 챔피언스 코리아), commonly abbreviated as LCK, is the primary competition for League of Legends esports in South Korea.
          Contested by 10 teams, the league runs two seasons per year and serves as a direct route to qualification for the annual League of Legends World Championship. The LCK is administered in cooperation between Riot Games, KeSPA, OGN, and SPOTV Games.
The league was formerly named League Of Legends Champions before undergoing a major restructuring in late 2014, which saw a change in the competition's format and a rebranding to its current name.
 OGN reserved exclusive broadcasting rights of the league until 2016 when rights were split with SPOTV Games.
The LCK is widely considered to be the strongest League of Legends competition in the world, with the game's World Championship having been won exclusively by teams from the league since 2013.
KT Rolster are the current champions, winning their second title, and first since dropping the "Arrows" from their name, on 9 September 2018 after beating Griffin in the finals of LCK Summer 2018.
From the closest split roadcasting rights were retaken by Riot and will take place in Busan from now on. More inforamtion <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/standings/playoffs">here</a>
        </p>
        <p>
          Teams below will be placed depending on their place in last splits
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
                    <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/griffin">Griffin</a>
                  </td>
                  <td class="align-middle" >Daeho "cvMax" Kim</td>
                  <td class="align-middle"><img class="Griffin_logo" src="Assets/Images/Griffin.png" alt="Griffin"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">1</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/kt-rolster">KT Rolster</a>
                  </td>
                  <td class="align-middle"> Jesung "Noexcuse" Jeong</td>
                  <td class="align-middle"><img class="KT_Logo" src="Assets/Images/KT.png" alt="KT"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">3</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/kingzone-dragonx">King-Zone DragonX</a>
                  </td>
                  <td class="align-middle">Donghoon "Hirai" Kang</td>
                  <td class="align-middle"><img class="KZ_Logo" src="Assets/Images/KZ.png" alt="KZ"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">4</th>
                  <td class="align-middle">
                  <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/geng">Gen. G. eSports</a>
                  </td>
                  <td class="align-middle">Woobum Choi</td>
                  <td class="align-middle"><img class="GenG_logo" src="Assets/Images/GenG.png" alt="GenG"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">5</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/afreeca-freecs">Afreeca Freecs</a>
                  </td>
                  <td class="align-middle">Hyesung "Comet" Lim</td>
                  <td class="align-middle"><img class="AF_logo" src="Assets/Images/AF.png" alt="AF"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">6</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/hanwha-life-esports">Hanwha Life eSports</a>
                  </td>
                  <td class="align-middle">Hyunjong "World Series" Kang</td>
                  <td class="align-middle"><img class="HW_logo" src="Assets/Images/HW.png" alt="HW"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">7</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/sktelecom-t1">SK Telecom T1</a>
                  </td>
                  <td class="align-middle">TJeonggyun "kkOma" Kim</td>
                  <td class="align-middle"><img class="SKT_logo" src="Assets/Images/SKT.png" alt="SKT"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">8</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/jin-air-green-wings">Jin Air Greenwings</a>
                  </td>
                  <td class="align-middle">Sangyong Han</td>
                  <td class="align-middle"><img class="JA_logo" src="Assets/Images/JA.png" alt="JA"></td>
                </tr>
                <tr>
                  <tr>
                    <th class="align-middle" scope="row">9</th>
                    <td class="align-middle">
                      <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/mvp">MVP</a>
                    </td>
                    <td class="align-middle">Jaehwan "Hell" Kwon</td>
                    <td class="align-middle"><img class="MVP_logo" src="Assets/Images/MVP.png" alt="MVP"></td>
                  </tr>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">10</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://www.lolesports.com/en_US/lck/lck_2018_summer/teams/bbq-olivers">BBQ Olivers</a>
                  </td>
                  <td class="align-middle"> Kim "TUKSAMA" Karam</td>
                  <td class="align-middle"><img class="BBQ_logo" src="Assets/Images/BBQ.png" alt="BBQ"></td>
                </tr>
              </tbody>
            </table>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
