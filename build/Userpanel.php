<?php
    session_start();
    require("Config.php");
    require("Functions.php");

    if(!$_SESSION['logged_in']){
        header("Location: Index.php");
    }

    $errors = array();
    $message = "";
    
	if($_SERVER['REQUEST_METHOD'] == 'POST' && $_SESSION['logged_in'] == TRUE){
        //If clicked button to change password
        if(isset($_POST['Change_password_request'])){
            $old_password = mysqli_real_escape_string($db, $_POST['old_password']); //Remove special chars from old password
            $new_password = mysqli_real_escape_string($db, $_POST['new_password']); //Remove special chars from new password
            $new_password_repeat = mysqli_real_escape_string($db, $_POST['new_password_repeat']); //Remove special chars from repeated password
            
            //Check if fields are filled
            if(empty($old_password)){
                array_push($errors, "Old passwrod is empty!");
            }
            if(empty($new_password)){
                array_push($errors, "New password is empty!");
            }
            if(empty($new_password_repeat)){
                array_push($errors, "Repeated password is empty!");
            }
            
            //Check if new password is identical to old password
            if($old_password == $old_password && $old_password == $new_password_repeat){
                array_push($errors, "New password cannot be the same as old one");
            }
            
            //Check if new passwords are indentical
            if($new_password != $new_password_repeat){
                array_push($errors, "Passwords do not match!");
            }
            
            //Check password chars and lenght
            if(!VerifyPassword($new_password, 6)){
                array_push($errors, "Invalid form of new password!");
            }
            
            //If no errors occured
            if(count($errors) == 0){
                $temp_userlogin = $_SESSION['user_login']; //Temporary variable
                $sql = "SELECT ID, password FROM users WHERE username='$temp_userlogin'";
                $query_result = mysqli_query($db, $sql);
                $results = mysqli_fetch_assoc($query_result);
                
                if(!isset($results['ID'])){
                    array_push($errors, "Error with database!");
                }
                
                if($results['password'] == hash('sha512', $old_password) && count($errors) == 0){
                    $temp_password = hash('sha512', $new_password); //Temporary variable
                    $temp_userid = $results['ID']; //Temporary variable
                    $sql = "UPDATE users SET password='$temp_password' WHERE ID='$temp_userid'";
                    if($query_result = mysqli_query($db, $sql)){
                        $message = "Successfully changed password!";
                    }
                    else{
                        array_push($errors, "Error with changing password!");
                    }
                }
                else{
                    array_push($errors, "Could not update password!");
                }
            }
        }
        
        //If clicked button to change e-mail
        if(isset($_POST['Change_email_request'])){
            $new_email = mysqli_real_escape_string($db, $_POST['new_mail']); //Remove special chars from new e-mail
            
            //Check if fields are filled
            if(empty($new_email)){
                array_push($errors, "E-mail field is empty!");
            }
            
            //Check password chars and lenght
            if(!VerifyEmail($new_email)){
                array_push($errors, "Invalid form of new e-mail!");
            }
            
            //If no errors occured
            if(count($errors) == 0){
                $temp_userlogin = $_SESSION['user_login']; //Temporary variable
                $sql = "SELECT email FROM users";
                $query_result = mysqli_query($db, $sql);
                
                while($results = mysqli_fetch_assoc($query_result)){
                    if($results['email'] == $new_email){
                        array_push($errors, "This e-mail already exists!");
                        break;
                    }
                }
                
                if(count($errors) == 0){
                    $temp_email = $new_email; //Temporary variable
                    $temp_userid = $_SESSION['user_id']; //Temporary variable
                    $sql = "UPDATE users SET email='$temp_email' WHERE ID='$temp_userid'";
                    if($query_result = mysqli_query($db, $sql)){
                        $message = "Successfully changed e-mail!";
                    }
                    else{
                        array_push($errors, "Error with changing e-mail!");
                    }
                }
                else{
                    array_push($errors, "Could not update e-mail!");
                }
            }
        }
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/Style.css" />

</head>
<body>
    <div class="grid">
        <?php
            include("Header.php");
        ?>

        <div class="main">
            <h2 id="userpanel_title">User Panel</h2>

            <p id="userpanel">Change password:</p>
            <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
                <label>Old password :</label> <input type = "password" name = "old_password" class = "box"/><br><br>
                <label>New password :</label> <input type = "password" name = "new_password" class = "box" /><br><br>
                <label>Repeat new password :</label> <input type = "password" name = "new_password_repeat" class = "box" /><br><br>
                <input type = "submit" value = "Change password" name="Change_password_request"/><br/>
            </form>

            <hr>

            <p id="userpanel">Change email:</p>
            <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
                <label>New e-mail :</label> <input type = "text" name = "new_mail" class = "box"/><br><br>
                <input type = "submit" value = "Change e-mail" name="Change_email_request"/><br/>
            </form>

            <hr>

            <?php
                foreach($errors as $err){
                    echo $err . "<br>";
                }
            ?>
            <p id="message_success"><?php echo $message; ?></p>

        </div>



        <?php
            include("Menu.php");
            include("Footer.php");
        ?>
    </div>
</body>
</html>