<?php include('server.php') ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Registration Form</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Register</h2>
        </div>

        <form method="post" action="register.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label for="fNameLabel">First Name</label>
                <input type="text" name="fName">
            </div>
            <div class="input-group">
                <label for="lNameLabel">Last Name</label>
                <input type="text" name="lName">
            </div>
            <div class="input-group">
                <label for="embgLabel">EMBG</label>
                <input type="text" name="embg" value="<?php echo $embg ?>">
            </div>
            <div class="input-group">
                <label for="pass_noLabel">Passport No.</label>
                <input type="text" name="pass_no" value="<?php echo $pass_no ?>">
            </div>
            <div class="input-group">
                <label for="emailLabel">Email Address:</label>
                <input type="text" name="email" value="<?php echo $email ?>">
            </div>
            <div class="input-group">
                <label for="pw1Label">Password</label>
                <input type="password" name="password1" value="<?php echo $password1 ?>">
            </div>
            <div class="input-group">
                <label for="pw2Label">Confirm your Password</label>
                <input type="password" name="password2" value="<?php echo $password2 ?>">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Register</button>
            </div>
            <p>Already a member? <a href="login.php">Sign In </a></p>
        </form>
    </body>
</html>