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
                  <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/invictus-gaming">Invictus Gaming</a>
                </td>
                <td> Jungsu Kim </td>
                <td><img class="IG_logo" src="Assets/Images/IG.png" alt="IG"></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>
                  <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/royal-never-give-up">Royal Never Give Up</a>
                </td>
                <td> Gwanhyung "Heart" Yi</td>
                <td><img class="RNG_Logo" src="Assets/Images/RNG.png" alt="RNG"></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>
                  <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/qg-reapers">JD Gaming</a>
                </td>
                <td>Shuwei "UDJ" Yang</td>
                <td><img class="JD_Logo" src="Assets/Images/JD.png" alt="JD.png"></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>
                  <a class="Team" id="link" href="https://lol.gamepedia.com/Suning_Gaming">Sunning Gaming</a>
                </td>
                <td>Sung Soo Sim</td>
                <td><img class="Suning_logo" src="Assets/Images/Suning.png" alt="Suning"></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>
                  <a class="Team" id="link" href="https://lol.gamepedia.com/LGD_Gaming">LGD Gaming</a>
                </td>
                <td>Cheon Ju "Acorn" Choi</td>
                <td><img class="LGD_logo" src="Assets/Images/LGD.jpg" alt="LGD.jpg"></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>
                  <a class="Team" id="link" href="https://lol.gamepedia.com/Bilibili_Gaming">6.Bilibili Gaming</a>
                </td>
                <td>Jisong "maokai" Yang</td>
                <td><img class="Bilbili_logo" src="Assets/Images/Bilbili.png" alt="Bilbili"></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>
                  <a class="Team" id="link" href="https://lol.gamepedia.com/Vici_Gaming">7.Vici Gaming</a>
                </td>
                <td>Namhoon "Hoon" Kim</td>
                <td><img class="Vici_logo" src="Assets/Images/Vici.jpg" alt="Vici"></td>
              </tr>
            </tbody>
          </table>
        <p5>Group B
        </p5>
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
                    <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/rogue-warriors">Rogue Warriors</a>
                  </td>
                  <td> Frank "Steak" Chou</td>
                  <td><img class="RW_logo" src="Assets/Images/RW.png" alt="RW"></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>
                    <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/edward-gaming">Edward Gaming</a>
                  </td>
                  <td> GNocheor "NoFe" Jeong</td>
                  <td><img class="EDG_Logo" src="Assets/Images/EDG.png" alt="EDG"></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>
                    <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/topsports-gaming">TopSports Gaming</a>
                  </td>
                  <td>Shen "Crescent" Luo</td>
                  <td><img class="TS_Logo" src="Assets/Images/TS.png" alt="TS.png"></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>
                    <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/funplus-phoenix">Funplus Pheonix</a>
                  </td>
                  <td>Seungchan Ha</td>
                  <td><img class="FP_logo" src="Assets/Images/FP.png" alt="FP"></td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>
                    <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/snake">Snake eSports</a>
                  </td>
                  <td>Kai "KenZhu" Zhu</td>
                  <td><img class="Snake_logo" src="Assets/Images/Snake.png" alt="Snake.jpg"></td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>
                    <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/team-we">Team WE</a>
                  </td>
                  <td>Woochul "viNylCat" Chae</td>
                  <td><img class="WE_logo" src="Assets/Images/WE.png" alt="WE"></td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>
                    <a class="Team" id="link" href="https://eu.lolesports.com/pl/zespol/omg">Oh My God</a>

                  <td>Tang Huangchao</td>
                  <td><img class="OMG_logo" src="Assets/Images/OMG.png" alt="OMG"></td>
                </tr>
              </tbody>
            </table>
          </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
