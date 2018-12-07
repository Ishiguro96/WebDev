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
        <h1>
          Teams allowed to play in major event
        </h1>
        <span>
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
                    <a class="Team" id="link" href="https://dota2.gamepedia.com/OG">OG</a>
                  </td>
                  <td >Evany Chang</td>
                  <td><img class="OG_logo" src="Assets/Images/OG.jpg" alt="OG"></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>
                    <a class="Team" id="link" href="https://dota2.gamepedia.com/LGD_Gaming">PSG.LGD</a>
                  </td>
                  <td> Yao "357" Yi</td>
                  <td><img class="PSG_Logo" src="Assets/Images/PSG.png" alt="PSG.LGD"></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>
                    <a class="Team" id="link" href="https://dota2.gamepedia.com/Evil_Geniuses">Evil Geniuses</a>
                  </td>
                  <td>Sam "BuLba" Sosale</td>
                  <td><img class="Evil_Logo" src="Assets/Images/evil.png" alt="Evil_Geniuses"></td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>
                  <a class="Team" id="link" href="https://www.teamliquidpro.com/players#dota2">Team Liquid</a>
                  </td>
                  <td>Kuro "KuroKy" Salehi Takhasomi</td>
                  <td><img class="TL_logo" src="Assets/Images/TL.png" alt="TL"></td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>
                    <a class="Team" id="link" href="https://virtus.pro/en/team">Virtus.pro</a>
                  </td>
                  <td>Arseniy "ArsZeeqq" Usov</td>
                  <td><img class="VP_logo" src="Assets/Images/VP.png" alt="VP"></td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>
                    <a class="Team" id="link" href="https://teamsecret.gg/2018/09/11/team-secret-dota-pro-circuit-2018-2019/">Team Secret</a>
                  </td>
                  <td>Lee ‘SunBhie’ Jeong-jae</td>
                  <td><img class="TS_logo" src="Assets/Images/TSecret.png" alt="TSecret"></td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>
                    <a class="Team" id="link" href="https://dota2.gamepedia.com/OpTic_Gaming">OpTic Gaming</a>
                  </td>
                  <td>Kodiak "Kodiak" Shroyer</td>
                  <td><img class="Optic_logo" src="Assets/Images/Optic.png" alt="SKT"></td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>
                    <a class="Team" id="link" href="Kodiak "Kodiak" Shroyer">VGJ.Storm</a>
                  </td>
                  <td>----------</td>
                  <td><img class="VGJ_logo" src="Assets/Images/VGJ.png" alt="VGJ"></td>
                </tr>
                <tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>
                      <a class="Team" id="link" href="https://dota2.gamepedia.com/Team_Serenity">Team Serenity</a>
                    </td>
                    <td>--------</td>
                    <td><img class="TSerenity_logo" src="Assets/Images/Tserenity.png" alt="TSerenity"></td>
                  </tr>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>
                    <a class="Team" id="link" href="https://dota2.gamepedia.com/Mineski">Mineski</a>
                  </td>
                  <td> essie "JessieVash" Cristy Cuyco</td>
                  <td><img class="Mineski_logo" src="Assets/Images/mineski.png" alt="Mineski"></td>
                </tr>
                <th scope="row">11</th>
                <td>
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/Winstrike_Team">Winstrike Team</a>
                </td>
                <td >--------</td>
                <td><img class="Winstrike_logo" src="Assets/Images/WT.png" alt="WT"></td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/Vici_Gaming">Vici Gamibg</a>
                </td>
                <td> Xu "JaL" Xiaoyun</td>
                <td><img class="KT_Logo" src="Assets/Images/Vici.jpg" alt="Vici"></td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>
                  <a class="Team" id="link" href="https://fnatic.com/teams/dota2">Fnatic</a>
                </td>
                <td>-------</td>
                <td><img class="KZ_Logo" src="Assets/Images/fnatic2.jpg" alt="Fnatic"></td>
              </tr>
              <tr>
                <th scope="row">14</th>
                <td>
                <a class="Team" id="link" href="https://dota2.gamepedia.com/TNC_Pro_Team">TNC Predator</a>
                </td>
                <td>Muriel "Kipspul" Huisman</td>
                <td><img class="GenG_logo" src="Assets/Images/TNC.png" alt="TNC"></td>
              </tr>
              <tr>
                <th scope="row">15</th>
                <td>
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/Newbee">Newbee</a>
                </td>
                <td>Wang "SanSheng" Zhaohui</td>
                <td><img class="AF_logo" src="Assets/Images/newbee.png" alt="Newbee"></td>
              </tr>
              <tr>
                <th scope="row">16</th>
                <td>
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/VGJ.Thunder">VGJ.Thunder</a>
                </td>
                <td>Xu "JaL" Xiaoyun</td>
                <td><img class="HW_logo" src="Assets/Images/VGJ.png" alt="VGJ"></td>
              </tr>
              <tr>
                <th scope="row">17</th>
                <td>
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/Invictus_Gaming">Invictus Gaming</a>
                </td>
                <td>Bai "rOtK" Fan</td>
                <td><img class="SKT_logo" src="Assets/Images/IG.png" alt="IG"></td>
              </tr>
              <tr>
                <th scope="row">18</th>
                <td>
                  <a class="Team" id="link" href="https://dota2.gamepedia.com/PaiN_Gaming">pAIN GAIMING</a>
                </td>
                <td>SGustavo "YonKyon" Santana</td>
                <td><img class="JA_logo" src="Assets/Images/PG.png" alt="PG"></td>
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
