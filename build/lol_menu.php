<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<a id="link" href="lol_news.php?type=lol#navbar">News</a>
<a id="link" href="lol_leaderboard.php?type=lol#navbar">LEC Leaderboard</a>
<a id="link" href="lol_teams.php?type=lol#navbar">LEC teams</a>
<a id="link" href="lol_calendar.php?type=lol#navbar">Calendar</a>
