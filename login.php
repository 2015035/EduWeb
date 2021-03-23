<?php
    session_start();
    if(isset($_SESSION["username"])) {
        if ($_SESSION["username"] == "Admin01") {
                header("location:admin_panel.php");
            }else{
                header("location:user_panel.php");
            }
    }
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8"/>
    <title>Login - EduWeb</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<?php
    require('db.php');
    
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users3` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            if ($_SESSION['username'] == "admin01") {
                header("location:admin_panel.php");
            }else {
                header("location:user_panel.php");
            }
            
        } else {
            echo "<div class='form'>
                    <h5>Incorrect Username/password.</h5>
                    <p><a href='login.php'>Click Here to try again</a></p>
                  </div>";
        }
    } else {
?>  
    <div class="container">
        <div class="row" id="header">
        </div>
        <div class="row">
            <h5 id="prelogin">Login in if you already have an account</h5><hr style="border: 8px #1a2238 solid;">
            <div class="row" id="container">
                <div class="formcon">
                    <form class="form" method="post" name="login" action="login.php">
                        <h1 class="login-title">Login</h1>
                        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
                        <input type="password" class="login-input" name="password" placeholder="Password"/>
                        <input type="submit" value="Login" name="submit" class="login-button"/>
                        <p class="link"><a href="register.php">Create a New Account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
?>
</body>
</html>