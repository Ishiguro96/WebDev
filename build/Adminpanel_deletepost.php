<?php
    session_start();
    require("Config.php"); //MySQL database

    if(!$_SESSION['logged_in'] || !isset($_SESSION['user_rank'])){
        header("Location: Index.php");
    }
    if($_SESSION['user_rank'] != 'admin' && $_SESSION['user_rank'] != 'superadmin'){
        header("Location: Index.php");
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      //Pobranie zawartosci starego newsa
      if(isset($_POST['news_id'])){
        $news_id = mysqli_real_escape_string($db, $_POST['news_id']);
        $sql = "DELETE FROM news WHERE news.ID='$news_id'";
        $query = mysqli_query($db, $sql);

        header("Location: Index.php");
      }
    }
?>
