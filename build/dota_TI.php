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
        <img class="lol-content-image" src="Assets/Images/TI_2018.jpg" alt="TI_2018">
          <h6>
            The International 2018 is the concluding tournament of the Dota Pro Circuit and the eighth annual edition of The International. The tournament will be held
            on Canadian soil for the first time, as it moves to the Rogers Arena in Vancouver, Canada. For the first time, a point system based on official sponsored Majors and Minors were used to determine invites to The International.
          </h6>
          <span>
          <h2 class="text-center">
            Format
          </h2>
          <h3 class="text-center">
            Open Qualifiers June 14th - June 17th, 2018
          </h3>
          <p>
            Twelve Regional Single-elimination Open Qualifiers, two brackets for each region.
            The winners of each Open Qualifier will advance to the respective Main Qualifier.
          <p>
          <br>
          <h3 class="text-center">
            Regional Qualifiers  June 18th - June 25th, 2018
          </h3>
          <p class="text-center">
            Six Regional Qualifiers
          </p>
          <p class="text-center">
            The winners of each Main Qualifier will advance directly to The International.
          </p>
          <p class="text-center">
            The runners-up of the China, Southeast Asia, and North America Main Qualifiers will advance directly to The International.
          </p>
          <p class="text-center">
            The third place team of the North America Main Qualifiers will advance directly to The International.
          </p>
          <br>
          <br>
          <h2 class="text-center">
            Group Stage - August 15th - August 18th, 2018
          </h2>
          <h4 class="text-center">
            All eighteen teams are divided into two groups where they play in a Round Robin format.
          </h4>
          <p class="text-center">
              All matches are played in a Bo2.
          </p>
          <p class="text-center">
            The top four teams in each group advance to the Upper Bracket of the Main Event.
          </p>
          <p class="text-center">
            The bottom team in each group is eliminated.
          </p>
          <p class="text-center">
            The remaining teams advance to the Lower Bracket of the Main Event.
          </p>
          <br>
          <h1 class="text-center">
            Standings
          </h1>
          <span>
          <img class="lol-content-image" src="Assets/Images/TI2018standings.jpg" alt="TI_2018">
          <p class="text-center">
            If you found yurself confused over my writing click <a class="Team" id="link" href="http://www.dota2.com/international/standings/">here</a> to get info from Dota 2 official page.
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
