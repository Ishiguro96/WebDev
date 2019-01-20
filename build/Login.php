<?php
	require("Config.php"); //Include database onfiguration file
	session_start(); //Start user-unique session

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		// Escape special characters from database query to protect from mysql injection attacks
		$username = mysqli_real_escape_string($db, $_POST['username']); //Remove special chars from username
		$password = mysqli_real_escape_string($db, $_POST['password']); //Remove special chars from password

		// Hash password using SHA512 algorythm
		$password = hash('sha512', $password);

		// Make string to use inside mysql database
    $sql = "SELECT users.username, users.ID, ranks.name, ranks.description FROM users INNER JOIN ranks ON users.rankID = ranks.ID  WHERE username = '$username' AND password='$password'";
		$query_result = mysqli_query($db, $sql); //Query above statement to MySQL
    $results = mysqli_fetch_assoc($query_result); //Fetch results as associative array

		// Check if query was successful
    if(mysqli_num_rows($query_result) == 1){
			// Set sessions variables to use on other pages
      $_SESSION['user_login'] = $results["username"];
      $_SESSION['user_id'] = $results["ID"];
      $_SESSION['user_rank'] = $results["name"];
      $_SESSION['user_rank_desc'] = $results['description'];

			// Check if we set variables correctly
      if(isset($_SESSION['user_login']) && isset($_SESSION['user_id']) && isset($_SESSION['user_rank'])){
				// Set session variable which indicates login status
        $_SESSION['logged_in'] = TRUE;
      }
    }
	}
	
  header("Location: Index.php"); // Go to Index.php page
?>
