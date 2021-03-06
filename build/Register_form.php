<?php
	require("Config.php"); //Include database configuration file
  require("Functions.php"); //Include functions file
	session_start(); //Start user-unique session

    $register_username = "";
    $register_email = "";
    $register_password = "";
    $register_confirm_password = "";

		// Errors array
    $register_errors = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		// Remove special characters from input variables
		$register_username = mysqli_real_escape_string($db, $_POST['register_username']); //Remove special chars from username
    $register_email = mysqli_real_escape_string($db, $_POST['register_email']); //Remove special chars from email
		$register_password = mysqli_real_escape_string($db, $_POST['register_password']); //Remove special chars from password
    $register_confirm_password = mysqli_real_escape_string($db, $_POST['register_confirm_password']); //Remove special chars from password

		// Check emptiness of given variables
	  if(empty($register_username)){
	      array_push($register_errors, "Username cannot be empty!");
	  }
	  if(empty($register_email)){
	      array_push($register_errors, "E-mail cannot be empty!");
	  }
	  if(empty($register_password) || empty($register_confirm_password)){
	      array_push($register_errors, "Password cannot be empty!");
	  }
	  if($register_password != $register_confirm_password){
	      array_push($register_errors, "Passwords do not match!");
	  }

		// Verify variables using REGEX queries
	  if(!VerifyUsername($register_username, 5)){
	      array_push($register_errors, "Invalid form of username!");
	  }
	  if(!VerifyEmail($register_email)){
	      array_push($register_errors, "Invalid e-mail adress!");
	  }
	  if(!VerifyPassword($register_password, 6)){
	      array_push($register_errors, "Invalid form of password");
	  }

		// Query MySQL - check uniqueness of username and e-mail
	  $user_check_query = "SELECT * FROM users WHERE username='$register_username' OR email='$register_email'";
	  $user_query_result = mysqli_query($db, $user_check_query);
	  $user_results = mysqli_fetch_assoc($user_query_result);

		// Check if there were no errors
	  if(count($register_errors) == 0){
	      if(isset($user_results)){
						// Check if user / email already exists
	          if($user_results['username'] == $register_username){
	              array_push($register_errors, "Username already exists!");
	          }
	          else if($user_results['email'] == $register_email){
	              array_push($register_errors, "E-mail already exists!");
	          }
	      }
	  }

		// Check if there were no errors
	  if(count($register_errors) == 0){
				// Hash password and insert new data to mysql database
	      $register_password = hash('sha512', $register_password);
	      $sql = "INSERT INTO users (username, password, email) VALUES ('$register_username', '$register_password', '$register_email')";
	      if($query_result = mysqli_query($db, $sql) === TRUE){ //Query above statement to MySQL
	          $sql = "SELECT users.username, users.ID, ranks.name FROM users INNER JOIN ranks ON users.rankID = ranks.ID  WHERE username = '$register_username' AND password='$register_password'";
	          $query_result = mysqli_query($db, $sql);
	          $results = mysqli_fetch_assoc($query_result);

						// Set session variables
	          $_SESSION['user_login'] = $results["username"];
	          $_SESSION['user_id'] = $results["ID"];
	          $_SESSION['user_rank'] = $results["name"];

	          if(isset($_SESSION['user_login']) && isset($_SESSION['user_id']) && isset($_SESSION['user_rank'])){
	              $_SESSION['logged_in'] = TRUE;
	          }

	          header("Location: Index.php");
	      }
	  }
	}
?>

<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<?php require('CSS_meta.php'); ?>

</head>
<body>

  <?php require('Header.php'); ?>

  <main role="main">
  <div class="container">
    <div class="row">

      <?php include('Menu.php'); ?>

      <div class="col-md order-md-1 h-100 content">
				<h2 id="registration_title">Registration form</h2>
				<p id="register">Register new user:</p>
				<form action = "<?php echo $_SERVER['PHP_SELF']; ?>#logo" method = "post">
					<label>Username* :</label> <input type = "text" name = "register_username" class = "box"/><br><br>
					<label>E-mail* :</label> <input type = "text" name = "register_email" class = "box" /><br><br>
					<label>Password* :</label> <input type = "password" name = "register_password" class = "box" /><br><br>
					<label>Confirm password* :</label> <input type = "password" name = "register_confirm_password" class = "box" /><br><br>
					<button class="btn btn-outline-warning" type="submit" class>Submit</button>
				</form>

				<?php
					if(!empty($register_errors)){ ?>
						<hr style="background-color: orange">
				<?php }
					foreach($register_errors as $err){ ?>
						<div class="alert alert-danger" role="alert">
  						<?php echo $err; ?>
						</div>
				<?php } ?>

      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>

  </main>

  <?php require('JScript_meta.php'); ?>
</body>
</html>
