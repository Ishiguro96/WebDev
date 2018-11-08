<?php
    session_start();

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
<link rel="stylesheet" href="Main_style.css" />

</head>
<body>
    <div class="grid">
        <?php
            include("Header.php");
        ?>

        <div class="main">
            <h2>TEMPLATE</h2>
        </div>



        <?php
            include("Menu.php");
        
            include("Footer.php");
        ?>
    </div>
</body>
</html>