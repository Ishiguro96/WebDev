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

      <div class="col-md order-md-1 h-100 content" id="content">
        Dota 2 – gra komputerowa z gatunku action RTS, (zwanego także MOBA), która została stworzona i wydana przez Valve Corporation. Oparta jest na modelu free-to-play, i używa po raz pierwszy silnika Source 2. Jest samodzielną kontynuacją modyfikacji Defense of the Ancients do gry Warcraft III: Reign of Chaos i dodatku Warcraft III: The Frozen Throne. Została wydana na Microsoft Windows, macOS oraz Linuksa.
Została oficjalnie zapowiedziana 13 października 2010 roku w serwisie Game Informer. Przez dwa lata gra była w fazie beta testów, a 9 lipca 2013 roku nastąpiła jej oficjalna premiera[10].
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
