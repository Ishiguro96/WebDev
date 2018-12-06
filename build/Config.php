<?php
    if(count(get_included_files()) == 1){ //If the file was not included redirect to Index.php
        header("Location: Index.php");
    }
	/*define('DB_SERVER', 'sql7.freemysqlhosting.net'); //MySQL Server with port
	define('DB_USERNAME', 'sql7265580'); //MySQL Username
	define('DB_PASSWORD', 'E7WNg6JNIi'); //MySQL Password
	define('DB_DATABASE', 'sql7265580'); //MySQL Database Name
  */
  define('DB_SERVER', 'localhost:3306'); //MySQL Server with port
	define('DB_USERNAME', 'root'); //MySQL Username
	define('DB_PASSWORD', 'root'); //MySQL Password
	define('DB_DATABASE', 'it'); //MySQL Database Name

	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE); //Connecting to MySQL Server
?>
