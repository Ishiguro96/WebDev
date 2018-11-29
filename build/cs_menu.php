<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<a id="link" href="cs_news.php?type=cs#navbar">News</a>
<a id="link" href="cs_major.php?type=cs#navbar">Katowice Major 2019</a>
<a id="link" href="cs_ple.php?type=cs#navbar">PLE</a>
<a id="link" href="cs_polish.php?type=cs#navbar">Polish Organisations</a>
