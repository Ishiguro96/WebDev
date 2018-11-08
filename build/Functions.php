<?php
    if(count(get_included_files()) == 1) //If the file was not included redirect to Index.php
        header("Location: Index.php");
    
    //Function to verify password characters and length
    function VerifyPassword($password_to_verify, $minimal_password_length){
        if(preg_match('/^[a-zA-Z0-9._-]/', $password_to_verify) && strlen($password_to_verify) > $minimal_password_length){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    //Function to verify e-mail characters
    function VerifyEmail($email_to_verify){
        if(preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$/', $email_to_verify)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    //Function to verify username characters and length
    function VerifyUsername($username_to_verify, $minimal_username_length){
        if(preg_match('/^[a-zA-Z0-9_-]+/', $username_to_verify) && strlen($username_to_verify) > $minimal_username_length){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
?>