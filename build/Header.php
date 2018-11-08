<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>
<div class="header-top">
  <h1>IT Project - Main Page</h1>
</div>

<?php
    include("Navigation.php");

    include("Login_form.php");
?>
