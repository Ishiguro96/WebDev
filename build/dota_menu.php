<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<a id="link" href="dota_news.php">News</a>
<a id="link" href="dota_major.php">Majors 2019</a>
<a id="link" href="dota_TI.php">TI8 2018</a>
<a id="link" href="dota_teams.php">TI Teams</a>
