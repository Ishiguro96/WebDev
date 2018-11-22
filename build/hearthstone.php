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

      <?php include('hearth_menu.php'); ?>

      <div class="col-md-10 order-md-1 h-100 content" style="border: 1px dashed yellow">
        Hearthstone, pierwotnie Hearthstone: Heroes of Warcraft – kolekcjonerska gra karciana wyprodukowana i wydana przez Blizzard Entertainment, której premiera na komputery osobiste z systemem Windows i Macintosh odbyła się 11 marca 2014 roku. Później wydano także wersję na urządzenia mobilne z systemami iOS i Android oraz dodano możliwość gry przy pomocy ekranu dotykowego na urządzeniach z systemem Windows 8. Gra oparta jest na modelu free-to-play z systemem mikropłatności, a głównym elementem rozgrywki są pojedynki online przeciwko innym graczom w serwisie Battle.net. Hearthstone zostało dobrze przyjęte przez krytyków, uzyskując wysokie średnie ocen w agregatorach. W wersji na komputery osobiste gra zdobyła 87,57% w serwisie GameRankings oraz 88/100 w portalu Metacritic. W listopadzie 2015 roku liczba założonych kont w grze przekroczyła 40 milionów. Gra doczekała się trzynastu rozszerzeń zatytułowanych Klątwa Naxxramas, Gobliny vs Gnomy, Czarna Góra, Wielki turniej, Liga Odkrywców, Przedwieczni Bogowie, Pewnej nocy w Karazhanie, Ciemne zaułki Gadżetonu, Podróż do wnętrza Un'Goro, Rycerze Mroźnego Tronu, Kobolody i katakumby, Wiedźmi Las oraz Projekt Hukatomba.
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
