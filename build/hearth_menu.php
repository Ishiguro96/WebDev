<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

  <a id="link" href="hearth_news.php?type=hearthstone#navbar">News</a>
  <a id="link" href="hearth_global.php?type=hearthstone#navbar">Global Games</a>
  <a id="link" href="hearth_playoffs.php?type=hearthstone#navbar">Winter Playoffs</a>
  <a id="link" href="hearth_polish.php?type=hearthstone#navbar">Polish Players</a>
