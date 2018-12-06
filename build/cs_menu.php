<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<button class="btn btn-outline-warning" onclick="location.href='cs_news.php?type=cs#navbar';">
  News
</button><br><br>

<button class="btn btn-outline-warning" onclick="location.href='cs_major.php?type=cs#navbar';">
  Katowice Major 2019
</button><br><br>

<button class="btn btn-outline-warning" onclick="location.href='cs_ple.php?type=cs#navbar';">
  PLE
</button><br><br>

<button class="btn btn-outline-warning" onclick="location.href='cs_polish.php?type=cs#navbar';">
  Polish Organisations
</button>
