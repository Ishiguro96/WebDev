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
          <img class="lol-content-image" src="Assets/Images/PLE.jpg" alt="LoL">
          <p>It's a polish e-sport league with both semi-professional and professional division. Players are able to compete in CS:GO and LoL. In CS we have ( as i wrote before) both semiprofessional an professional teams.
          </p>
          <p>
            To professional league 8 out of 10 temas where invited ( because of good organisations or great players, also 1 of them left the league due to a lot of international tournaments and leagues) 3 of them could take their place in qualifiers.
            Here you have a list of <a class="Team" id="link" href="http://csgo.polskaligaesportowa.pl/druzyny/jesien-2018#master">teams</a> and a table before the great finale wich takes place in Gliwice, December 14-15.
          </p>
          <p>
            <img class="lol-content-image" src="Assets/Images/ple_mistrzowska.jpg" alt="LoL">
          </p>
          <p>
            On the other hand we have semi-prfessional leagues where only 3 temas were invted(to be honest I do not know why) and the rest of them needed to get through qualifiers. the
            <a class="Team" id="link" href="http://csgo.polskaligaesportowa.pl/druzyny/jesien-2018#master">effects</a> are presented here. In those links you have also websites or social media of those teams so do not feel obliged
            to present you that one by one or in the table form. If we are talking about tables here are the standing in these lower-tier tournament.
          </p>
          <p>
            <img class="lol-content-image" src="Assets/Images/profesjonalna_ple.png" alt="LoL">
          </p>
          <p>
            As I mentioned before finals of PLE will be held in Gliwice, December 14-15. <a class="Team" id="link" href="http://csgo.polskaligaesportowa.pl/final-czwatego-sezonu-polskiej-ligi-esportowej-odbedzie-gliwicach/">Here</a> you have some more infos.
          </p>
          <br>
          <br>
          <p>
            <a class="Team" id="link" href="http://csgo.polskaligaesportowa.pl/">Source</a>
          </p>
        </div>
    </div>
  </div>


  <?php include('footer.php'); ?>


  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
