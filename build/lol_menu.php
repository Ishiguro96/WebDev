<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<button class="btn btn-outline-warning btn-menu" onclick="location.href='lol_news.php?type=lol#navbar';">
  News
</button><br><br>
<div class="dropdown">
  <button type="button" class="btn btn-outline-warning btn-sm dropdown-toggle btn-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Professional Leagues
  </button><br><br>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: black">
      <a class="dropdown-item" id="link" href="lol_LEC_.php?type=lol#navbar">LEC</a>
      <a class="dropdown-item" id="link" href="lol_NALCS.php?type=lol#navbar">NALCS</a>
      <a class="dropdown-item" id="link" href="lol_LPL.php?type=lol#navbar">LPL</a>
      <a class="dropdown-item" id="link" href="lol_LCK.php?type=lol#navbar">LCK</a>
   </div>
</div>

<div class="dropdown">
  <button type="button" class="btn btn-outline-warning btn-sm dropdown-toggle btn-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    LEC Teams
  </button><br><br>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: black">
    <a class="dropdown-item" id="link" href="lol_Splyce.php?type=lol#navbar">Splyce</a>
    <a class="dropdown-item" id="link" href="lol_SK.php?type=lol#navbar">SK Gaming</a>
    <a class="dropdown-item" id="link" href="lol_Misfits.php?type=lol#navbar">Misfits Gaming</a>
    <a class="dropdown-item" id="link" href="lol_Vitality.php?type=lol#navbar">Vitality</a>
    <a class="dropdown-item" id="link" href="lol_Origen.php?type=lol#navbar">Origen</a>
    <a class="dropdown-item" id="link" href="lol_Schalke.php?type=lol#navbar">Schalke 04</a>
    <a class="dropdown-item" id="link" href="lol_exceL.php?type=lol#navbar">exceL Esports</a>
    <a class="dropdown-item" id="link" href="lol_Fnatic.php?type=lol#navbar">Fnatic</a>
    <a class="dropdown-item" id="link" href="lol_G2.php?type=lol#navbar">G2 Esports</a>
    <a class="dropdown-item" id="link" href="lol_Rogue.php?type=lol#navbar">Rogue</a>
  </div>
</div>
<button class="btn btn-outline-warning btn-menu" onclick="location.href='lol_calendar.php?type=lol#navbar';">
  Callendar
</button>
