<?php
include './config.php';
if (isset($_POST['username'])&& isset($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(!empty($username)&&!empty($password)){
        $sql1="SELECT username FROM users WHERE username='$username'";
        $results=mysqli_query($conn,$sql1);
        if($results && mysqli_num_rows($results)===1){
            header("Location:register.php?error=username already exists");
            exit();
        }else{

            $hashedPassword=password_hash($password,PASSWORD_BCRYPT);
            $sql="INSERT INTO users(username,password) VALUES('$username','$hashedPassword')";
            $result=mysqli_query($conn,$sql);
            if ($result) {
                header("Location:register.php?message=Registerd successfully");
                exit();
                //echo "User registered successfully!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }else{
        header("Location:register.php?error=Fill all fields");
        exit();
        //echo "TF.. fill the form";
    }
}