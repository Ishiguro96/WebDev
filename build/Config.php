<?php
    if(count(get_included_files()) == 1){ //If the file was not included redirect to Index.php
        header("Location: Index.php");
    }
	define('DB_SERVER', 'db4free.net'); //MySQL Server with port
	define('DB_USERNAME', 'ishiguro96'); //MySQL Username
	define('DB_PASSWORD', 'Dbpass123'); //MySQL Password
	define('DB_DATABASE', 'itproj'); //MySQL Database Name

	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE); //Connecting to MySQL Server
?>
