<?php
	require("Config.php"); //Include database onfiguration file
	session_start(); //Start user-unique session
    
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$username = mysqli_real_escape_string($db, $_POST['username']); //Remove special chars from username
		$password = mysqli_real_escape_string($db, $_POST['password']); //Remove special chars from password
		$password = hash('sha512', $password);

		//echo "Debug 1: Username = " . $username . " Password = " . $password . "<br><br>";
        
        $sql = "SELECT users.username, users.ID, ranks.name, ranks.description FROM users INNER JOIN ranks ON users.rankID = ranks.ID  WHERE username = '$username' AND password='$password'";
		$query_result = mysqli_query($db, $sql); //Query above statement to MySQL
        //if($query_result){
            $results = mysqli_fetch_assoc($query_result); //Fetch results as associative array
            //echo "Debug 2: results = " . implode(" ", $results) . " ------- " . mysqli_num_rows($query_result) ."<br><br>";

            if(mysqli_num_rows($query_result) == 1){
                $_SESSION['user_login'] = $results["username"];
                $_SESSION['user_id'] = $results["ID"];
                $_SESSION['user_rank'] = $results["name"];
                $_SESSION['user_rank_desc'] = $results['description'];

                if(isset($_SESSION['user_login']) && isset($_SESSION['user_id']) && isset($_SESSION['user_rank'])){
                    $_SESSION['logged_in'] = TRUE;
                }
            }
        //}
	}

    header("Location: Index.php");
?>