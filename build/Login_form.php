<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>

<div class="login_section">
    <?php

    if(isset($_SESSION['logged_in'])){ ?>
    
        <h3>Hello, <?php echo $_SESSION['user_login']; ?></h3>
        <a href="Logout.php">LOG OUT</a>
        
    <?php
    } else { ?>
        <form action = "Login.php" method = "post">
            <label>Username: </label> <input type = "text" name = "username" class = "box"/><br><br>
            <label>Password: </label> <input type = "password" name = "password" class = "box" /><br><br>
            <input type = "submit" value = " Submit "/><br/>
        </form>
    <?php
        }
    ?>
</div>