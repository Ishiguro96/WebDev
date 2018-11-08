<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<div class="login_section">
    <?php

    if(isset($_SESSION['logged_in'])){ ?>

        <h3>Hello, <?php echo $_SESSION['user_login']; ?></h3>
        <input type="button" onclick="location.href='Logout.php';" value="Logout"/>

    <?php
    } else { ?>
        <form action = "Login.php" method = "post">
            <input type = "text" name = "username" class = "box" placeholder="Username"/><br><br>
            <input type = "password" name = "password" class = "box" placeholder="Password"/><br><br>
            <input type = "submit" value = " Submit "/><br/>
        </form>
    <?php
        }
    ?>
</div>
