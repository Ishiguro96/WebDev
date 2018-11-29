<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<a id="link" href="cs_news.php">News</a>
<a id="link" href="cs_major.php">Katowice Major 2019</a>
<a id="link" href="cs_ple.php">PLE</a>
<a id="link" href="cs_polish.php">Polish Organisations</a>
