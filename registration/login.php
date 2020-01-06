<?php include('server.php')?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>LogIn</h2>
        </div>

        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label for="emailInput">Email Address: </label>
                <input type="email" name="email">
            </div>
            <div class="input-group">
                <label for="passwordInput">Password: </label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Log In</button>
            </div>
            <p>Not yet a member? <a href="register.php">Sign Up </a></p>
        </form>
    </body>
</html>