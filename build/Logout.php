<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");

	session_start();

	if(session_destroy()){
		header("Location: Index.php#navbar");
	}
?>
