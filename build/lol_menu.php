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
<a id="link" href="lol_teams.php?type=lol#navbar">LEC teams</a>
<a id="link" href="lol_calendar.php?type=lol#navbar">Calendar</a>
