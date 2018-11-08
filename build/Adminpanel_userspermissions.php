<?php
    require('Config.php');

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $tmp = $_POST['selected_rank'];
        $sql = "SELECT ID, name FROM ranks WHERE description='$tmp'";
        $query = mysqli_query($db, $sql);
        $result = mysqli_fetch_assoc($query);
        $temp = $_POST['username'];
        $temp2 = $result['ID'];
        $sql = "UPDATE users INNER JOIN ranks ON users.rankID = ranks.ID  SET users.rankID='$temp2' WHERE users.username='$temp'";
        $query = mysqli_query($db, $sql);
        
        if($_SESSION['user_login'] == $_POST['username']){
            $_SESSION['user_rank'] = $result['name'];
        }
    }

    if(!$_SESSION['logged_in'] || !isset($_SESSION['user_rank'])){
        header("Location: Index.php");
    }
    if($_SESSION['user_rank'] != 'admin' && $_SESSION['user_rank'] != 'superadmin'){
        header("Location: Index.php");
    }

    $errors = array(); //Array to store errors

    $user_check_query = "SELECT users.ID, users.username, ranks.description, ranks.name FROM users INNER JOIN ranks ON users.rankID = ranks.ID";
    $user_query_result = mysqli_query($db, $user_check_query);

    $available_ranks_query = "SELECT name, description FROM ranks";
    $available_ranks_result = mysqli_query($db, $available_ranks_query);

    $ranks = array();

    while($available_ranks_results = mysqli_fetch_assoc($available_ranks_result)){
        array_push($ranks, $available_ranks_results['description']);
    }

    $iter = 0;

    
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
            <table style="width: 100%;">
                <tr>
                    <th>Username</th>
                    <th>Rank</th>
                </tr>
                <?php
                    while($user_results = mysqli_fetch_assoc($user_query_result)){ $iter++; ?>
                <tr>
                    <th><p id="table_user"> <?php echo $user_results['username']; ?> </p></th>
                    <th><p id="table_rank_desc"> <?php echo $user_results['description']; ?> </p></th>
                    
                    <th>
                    <form method="post">
                        <p id="table_permission">
                        <input type="hidden" id="username_form_adminpanel" name="username" value="<?php echo $user_results['username']; ?>">
                        <select onchange="this.form.submit()" name="selected_rank" <?php if($user_results['name'] == 'superadmin') echo "disabled"; ?> >
                            <?php
                                foreach($ranks as $arr){
									if($arr != "Super Administrator"){
										if($arr == $user_results['description']){
											echo "<option selected>" . $arr . "</option>";
										}
										else{
											echo "<option>" . $arr . "</option>";
										}
									}
                                }
                            ?>
                        </select>
                        </p>
                    </form>
                    </th>
                    
                </tr>
                <?php } ?>
            </table>           
        </div>



        <?php
            include("Menu.php");
        
            include("Footer.php");
        ?>
    </div>
</body>
</html>