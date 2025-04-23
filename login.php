<?php
session_start();
include "./config.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    if (empty($username)||empty($password)) {
        header("Location:index.php?error=all fields are required");
        exit();
    }
    else{

        //$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
        $sql="SELECT password FROM users WHERE username='$username'";
        $results=mysqli_query($conn,$sql);
    
        if ($results && mysqli_num_rows($results) === 1) {
            $row = mysqli_fetch_assoc($results);
            $hashedPassword = $row['password'];
            
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['username']=$username;
                header("Location:admin1.php");
                //echo "Login successful!";
            } else {
                header("Location:index.php");
                //echo "Invalid password.";
            }
        } else {
            header("Location:index.php");
            //echo "Invalid username.". $username;
        }
    }
}