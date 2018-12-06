<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<button class="btn btn-outline-warning" onclick="location.href='dota_news.php?type=dota#navbar';">
  News
</button><br><br>

<button class="btn btn-outline-warning" onclick="location.href='dota_major.php?type=dota#navbar';">
  Majors 2019
</button><br><br>

<button class="btn btn-outline-warning" onclick="location.href='dota_TI.php?type=dota#navbar';">
  TI8 2018
</button><br><br>

<button class="btn btn-outline-warning" onclick="location.href='dota_teams.php?type=dota#navbar';">
  TI Teams
</button>
