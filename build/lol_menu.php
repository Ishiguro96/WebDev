<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<a id="link" href="lol_news.php">News</a>
<a id="link" href="lol_leaderboard.php">LEC Leaderboard</a>
<a id="link" href="lol_teams.php">LEC teams</a>
<a id="link" href="lol_calendar.php">Calendar</a>
