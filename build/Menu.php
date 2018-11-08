<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<div class="menu">
    <ul class="menu-ul">
        <li>Smth 1</li>
        <li>Smth 2</li>
        <li>Smth 3</li>
        <li>Smth 4</li>
        <hr>
        <?php if(isset($_SESSION['logged_in'])){ ?>
            <li><a href="Userpanel.php">User Panel</a></li>
            <?php if($_SESSION['user_rank'] == 'superadmin' || $_SESSION['user_rank'] == 'admin'){ ?>
                <li><a href="Adminpanel.php">Admin Panel</a></li>
            <?php } ?>
        <?php } else { ?>
            <li><a href="Register_form.php">Register</a></li>
        <?php } ?>
    </ul>
</div>