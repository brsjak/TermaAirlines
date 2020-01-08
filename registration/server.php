<?php
    session_start();

    //initializing variables
    $fName = "";
    $lName = "";
    $embg = "";
    $pass_no = "";
    $email = "";
    $password1 = "";
    $password2="";
    $final_password="";
    $errors = array();

    $dbhost="localhost";
    $dbusername = "brsjak";
    $dbpassword = "151145";
    $dbName="termadb";

    //db connection
    $db = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbName);
    

    if(!$db){
        die("Failed to connect!" . $db->connect_error());
    }


    //User Registration
    if(isset($_POST['reg_user'])){

        //receiving the user input and adding the data into a variable

        $fName = mysqli_real_escape_string($db, $_POST['fName']);
        $lName = mysqli_real_escape_string($db, $_POST['lName']);
        $embg = mysqli_real_escape_string($db, $_POST['embg']);
        $pass_no = mysqli_real_escape_string($db, $_POST['pass_no']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password1 = mysqli_real_escape_string($db,$_POST['password1']);
        $password2 = mysqli_real_escape_string($db,$_POST['password2']);

        //echo "$fName $lName $embg $pass_no $email $password1 $password2";

        //form required fields verification

        if(empty($fName)){
            array_push($errors, "First Name is required!");
        }
        if(empty($lName)){
            array_push($errors, "Last Name is required!");
        }
        if(empty($embg)){
            array_push($errors, "EMBG is required!");
        }
        if(empty($pass_no)){
            array_push($errors, "Your passport number is required!");
        }
        if(empty($email)){
            array_push($errors, "Your email is required!");
        }
        if(empty($password1)){
            array_push($errors, "Your password is required!");
        }
        if(empty($password2)){
            array_push($errors, "Please validate your password!");
        }
        if($password1 != $password2){
            array_push($errors, "The two passwords do not match!");
        }

        //email embg and passno check in database

        $user_check_query = "SELECT * FROM person WHERE embg='$embg' OR pass_no='$pass_no' OR email='$email' LIMIT 1";

        $result = mysqli_query($db,$user_check_query);
        $user = mysqli_fetch_array($result);

        if($user){
            if($user['embg']===$embg){
                array_push($errors,"The EMBG that you entered already exists!");
            }
            if($user['pass_no']===$pass_no){
                array_push($errors,"The passport number that you entered alrady exists!");
            }
            if($user['email']===$email){
                array_push($errors,"The email address thay you entered already exists!");
            }
        }

        if(count($errors)==0){

            //password encryption
            $final_password=md5($password1);

            //maybe remove the "``"s
            $final_query = "INSERT INTO person (embg, f_name, l_name, pass_no, email, u_pass) VALUES ('$embg', '$fName', '$lName', '$pass_no', '$email', '$final_password')";
            
            //executing the final query and registering the new user

            if(mysqli_query($db,$final_query)){
                $_SESSION['email']=$email;
                $_SESSION['success']="You have successfully signed up!";
                header('location: login.php');
            }else{
                echo "ERROR!";
            }
           
        }
    }


    //User Login

    if(isset($_POST['login_user'])){
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($email)){
            array_push($errors, "Email is required!");
        }
        if(empty($password)){
            array_push($errors, "Password is required!");
        }

        if(count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM person WHERE email='$email' AND u_pass='$password'";
            $results = mysqli_query($db,$query);

            if(mysqli_num_rows($results) == 1){
                $_SESSION['email']=$email;
                $firstNameQuery = "SELECT f_name FROM person WHERE email='$email'";

                $fNameExecute = mysqli_query($db,$firstNameQuery);
                $result = mysqli_fetch_array($fNameExecute);
                $user_name = $result['f_name'];
                
                $_SESSION['firstName']=$user_name;
                header('location: ./../userArea/index.php');
            } else{
                array_push($errors, "Wrong username/password combination!");
            }
        }
    }
?>