<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<a id="link" href="dota_news.php?type=dota#navbar">News</a>
<a id="link" href="dota_major.php?type=dota#navbar">Majors 2019</a>
<a id="link" href="dota_TI.php?type=dota#navbar">TI8 2018</a>
<a id="link" href="dota_teams.php?type=dota#navbar">TI Teams</a>
