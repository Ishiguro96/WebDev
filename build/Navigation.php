<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<div class='navigation_section'>
    <ul class="nav">
        <li><a href="Index.php">Home Page</a></li>
        <li><a href="Index.php">Counter-Strike</a></li>
        <li><a href="Index.php">League of Legends</a></li>
        <li><a href="Index.php">DotA 2</a></li>
        <li><a href="Index.php">HeartStone</a></li>
    </ul>
</div>
