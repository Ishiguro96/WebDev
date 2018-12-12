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

      <div class="col-md-10 order-md-1 h-100 content" >
        <h1 class="text-center">
          Teams allowed to play in major event of TI 2018
        </h1>
        <br>
        <br>

          <div class="table-responsive table-dark" style="text-align: center;">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th  scope="col">#</th>
                  <th class="align-middle" scope="col">Organisation</th>
                  <th class="align-middle" scope="col">Coach</th>
                  <th class="align-middle" scope="col">logo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="align-middle" scope="row">1</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://dota2.gamepedia.com/OG">OG</a>
                  </td>
                  <td class="align-middle">Evany Chang</td>
                  <td class="align-middle"><img class="OG_logo" src="Assets/Images/OG.jpg" alt="OG"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">2</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://dota2.gamepedia.com/LGD_Gaming">PSG.LGD</a>
                  </td>
                  <td class="align-middle"> Yao "357" Yi</td>
                  <td class="align-middle"><img class="PSG_Logo" src="Assets/Images/PSG.png" alt="PSG.LGD"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">3</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://dota2.gamepedia.com/Evil_Geniuses">Evil Geniuses</a>
                  </td>
                  <td class="align-middle">Sam "BuLba" Sosale</td>
                  <td class="align-middle"><img class="Evil_Logo" src="Assets/Images/evil.png" alt="Evil_Geniuses"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">4</th>
                  <td class="align-middle">
                  <a class="Team" id="link" href="https://www.teamliquidpro.com/players#dota2">Team Liquid</a>
                  </td>
                  <td class="align-middle">Kuro "KuroKy" Salehi Takhasomi</td>
                  <td class="align-middle"><img class="TL_logo" src="Assets/Images/TL.png" alt="TL"></td>
                </tr>
                <tr>
                  <th  class="align-middle" scope="row">5</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://virtus.pro/en/team">Virtus.pro</a>
                  </td>
                  <td class="align-middle">Arseniy "ArsZeeqq" Usov</td>
                  <td class="align-middle"><img class="VP_logo" src="Assets/Images/VP.png" alt="VP"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">6</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://teamsecret.gg/2018/09/11/team-secret-dota-pro-circuit-2018-2019/">Team Secret</a>
                  </td>
                  <td class="align-middle">Lee ‘SunBhie’ Jeong-jae</td>
                  <td class="align-middle"><img class="TS_logo" src="Assets/Images/TSecret.png" alt="TSecret"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">7</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://dota2.gamepedia.com/OpTic_Gaming">OpTic Gaming</a>
                  </td>
                  <td class="align-middle">Kodiak "Kodiak" Shroyer</td>
                  <td class="align-middle"><img class="Optic_logo" src="Assets/Images/Optic.png" alt="SKT"></td>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">8</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="Kodiak "Kodiak" Shroyer">VGJ.Storm</a>
                  </td>
                  <td class="align-middle">----------</td>
                  <td class="align-middle"><img class="VGJ_logo" src="Assets/Images/VGJ.png" alt="VGJ"></td>
                </tr>
                <tr>
                  <tr>
                    <th class="align-middle" scope="row">9</th>
                    <td class="align-middle">
                      <a class="Team" id="link" href="https://dota2.gamepedia.com/Team_Serenity">Team Serenity</a>
                    </td>
                    <td class="align-middle">--------</td>
                    <td class="align-middle"><img class="TSerenity_logo" src="Assets/Images/Tserenity.png" alt="TSerenity"></td>
                  </tr>
                </tr>
                <tr>
                  <th class="align-middle" scope="row">10</th>
                  <td class="align-middle">
                    <a class="Team" id="link" href="https://dota2.gamepedia.com/Mineski">Mineski</a>
                  </td>
                  <td class="align-middle"> essie "JessieVash" Cristy Cuyco</td>
                  <td class="align-middle"><img class="Mineski_logo" src="Assets/Images/mineski.png" alt="Mineski"></td>
                </tr>
                <th class="align-middle" scope="row">11</th>
                <td class="align-middle">
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/Winstrike_Team">Winstrike Team</a>
                </td>
                <td class="align-middle">--------</td>
                <td class="align-middle"><img class="Winstrike_logo" src="Assets/Images/WT.png" alt="WT"></td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">12</th>
                <td class="align-middle">
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/Vici_Gaming">Vici Gamibg</a>
                </td class="align-middle">
                <td class="align-middle"> Xu "JaL" Xiaoyun</td>
                <td class="align-middle"><img class="KT_Logo" src="Assets/Images/Vici.jpg" alt="Vici"></td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">13</th>
                <td class="align-middle">
                  <a class="Team" id="link" href="https://fnatic.com/teams/dota2">Fnatic</a>
                </td>
                <td class="align-middle">-------</td>
                <td class="align-middle"><img class="KZ_Logo" src="Assets/Images/fnatic2.jpg" alt="Fnatic"></td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">14</th>
                <td class="align-middle">
                <a class="Team" id="link" href="https://dota2.gamepedia.com/TNC_Pro_Team">TNC Predator</a>
                </td>
                <td class="align-middle">Muriel "Kipspul" Huisman</td>
                <td class="align-middle"><img class="GenG_logo" src="Assets/Images/TNC.png" alt="TNC"></td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">15</th>
                <td class="align-middle">
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/Newbee">Newbee</a>
                </td>
                <td class="align-middle">Wang "SanSheng" Zhaohui</td>
                <td class="align-middle"><img class="AF_logo" src="Assets/Images/newbee.png" alt="Newbee"></td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">16</th>
                <td class="align-middle">
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/VGJ.Thunder">VGJ.Thunder</a>
                </td>
                <td class="align-middle">Xu "JaL" Xiaoyun</td>
                <td class="align-middle"><img class="HW_logo" src="Assets/Images/VGJ.png" alt="VGJ"></td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">17</th>
                <td class="align-middle">
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/Invictus_Gaming">Invictus Gaming</a>
                </td>
                <td class="align-middle">Bai "rOtK" Fan</td>
                <td class="align-middle"><img class="SKT_logo" src="Assets/Images/IG.png" alt="IG"></td>
              </tr>
              <tr>
                <th class="align-middle" scope="row">18</th>
                <td class="align-middle">
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/PaiN_Gaming">pAIN GAIMING</a>
                </td>
                <td class="align-middle">SGustavo "YonKyon" Santana</td>
                <td class="align-middle"><img class="JA_logo" src="Assets/Images/PG.png" alt="PG"></td>
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
