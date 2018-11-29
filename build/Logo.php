
<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>


<div class="header-image-container">
  <img src="Assets/Images/header.jpg" class="header-image" alt="Header Logo">
  <h2 id='logo'><span>Future Sports</span></h2>
</div>
