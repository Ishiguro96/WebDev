<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<div class='navigation_section'>
    <ul class="nav">
        <li class="home"><a href="Index.php">Home Page</a></li>
        <li class="lol"><a href="Index.php">Maybe some other link</a></li>
        <li class="starcraft"><a href="Index.php">Maybe some other link #2</a></li>
        <li class="dota2"><a href="Index.php">Maybe some other link #3</a></li>
        <li class="cs" ><a href="Index.php">Maybe some other link #4</a></li>
    </ul>
</div>
