<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8"/>
    <title>Register - EduWeb</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $fname = stripslashes($_REQUEST['fname']);
        //escapes special characters in a string
        $fname = mysqli_real_escape_string($con, $fname);
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);$email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $interests = stripslashes($_REQUEST['interests']);
        $interests = mysqli_real_escape_string($con, $interests);$query    = "INSERT into `users3` (fname, username, password, email, usertype, interests)
                     VALUES ('$fname','$username', '$password', '$email', 'user', '$interests')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h2>You are registered successfully.</h2><br/>
                  <p><a href='login.php'>Click here to Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h1>Required fields are missing.</h2><br/>
                  <p class='link'><a href='register.php'>Click here to try the registration once more.</a></p>
                  </div>";
        }
    } else {
?>
    <div class="container">
        <div class="row" id="header">
        </div>
        <div class="row">
            <h5 id="register">Register as a new user</h5><hr style="border: 8px #1a2238 solid;">
                <div class="row" id="container">
                    <div class="formcon">
                    <form class="form" action="register.php" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="register-input" name="fname" placeholder="Full Name" required />
        <input type="text" class="register-input" name="username" placeholder="Username" required />
        <input type="text" class="register-input" name="email" placeholder="Email Address">
        <input type="password" class="register-input" name="password" placeholder="Password">
        <input type="text" class="register-input" name="interests" placeholder="What topics interest you?">
        <input type="submit" name="submit" value="Register" class="register-button">
    </form>
<?php
    }
?>
</div>
</div>
</div>
</div>
</body>
</html>