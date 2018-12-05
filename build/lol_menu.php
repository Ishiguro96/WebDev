<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<a id="link" href="lol_news.php?type=lol#navbar">News</a>
<a id="link" href="lol_leaderboard.php?type=lol#navbar">
  <div class="dropdown show">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Professional Leagues</a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" id="link" href="lol_LEC_.php?type=lol#navbar">LEC</a>
          <a class="dropdown-item" id="link" href="lol_NALCS.php?type=lol#navbar">NALCS</a>
          <a class="dropdown-item" id="link" href="lol_LPL.php?type=lol#navbar">LPL</a>
          <a class="dropdown-item" id="link" href="lol_LCK.php?type=lol#navbar">LCK</a>
       </div>
  </div>
</a>
<a id="link" href="lol_leaderboard.php?type=lol#navbar">
  <div class="dropdown show">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    LEC Teams</a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
</a>
<a id="link" href="lol_calendar.php?type=lol#navbar">Calendar</a>
