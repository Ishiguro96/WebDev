<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
?>


<footer class="container">
    <p id="footer">Tobor Dawid &amp; Woźniak Paweł <?php echo date("Y"); ?></p>
</footer>
