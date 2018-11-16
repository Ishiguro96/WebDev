<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<div class='navigation_section'>
    <span class="nav">
        <span id="home"><a href="Index.php">Home Page</a></span>
        <span id="lol"><a href="Index.php">Maybe some other link</a></span>
        <span id="starcraft"><a href="Index.php">Maybe some other link #2</a></span>
        <span id="dota2"><a href="Index.php">Maybe some other link #3</a></span>
        <span id="cs" ><a href="Index.php">Maybe some other link #4</a></span>
    </span>
</div>
