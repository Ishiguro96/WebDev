<?php
    session_start();
    require("Config.php"); //MySQL database

    if(!$_SESSION['logged_in'] || !isset($_SESSION['user_rank'])){
        header("Location: Index.php");
    }
    if($_SESSION['user_rank'] != 'admin' && $_SESSION['user_rank'] != 'superadmin'){
        header("Location: Index.php");
    }

    
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/Style.css" />

</head>
<body>
    <div class="grid">
        <?php
            include("Header.php");
        ?>

        <div class="main">
            <h1>ADMIN PANEL</h1>
            
            <input type="button" onclick="location.href='Adminpanel_userspermissions.php';" value="Change users permissions" />
            
        </div>



        <?php
            include("Menu.php");
        
            include("Footer.php");
        ?>
    </div>
</body>
</html>