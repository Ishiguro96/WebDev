<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Assets/CSS/main.min.css" />

</head>
<body>
    <div class="grid">

        <?php
            include("Header.php");
        ?>

        <div class="main">
            <h1>Main Page</h1>
            <p>This is the Main Page of the </p>
        </div>

        <?php
            include("Menu.php");

            include("Footer.php");
        ?>
    </div>
</body>
</html>
