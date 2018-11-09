<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include('CSS_meta.php'); ?>

</head>
<body>
    <div class="grid">

        <?php
            include("Header.php");
        ?>

        <div class="main">
            <h1>Main Page</h1>
            <p>This is the Main Page of the project</p>
        </div>

        <?php
            include("Menu.php");

            include("Footer.php");
        ?>
    </div>
</body>
</html>
