<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email Address Already Exists !";
    }
    else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                      VALUES ('$firstName','$lastName','$email','$password')";
        if($conn->query($insertQuery)==TRUE){
            header("location: index.php");
        }
        else{
            echo "Error:".$conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        $_SESSION['firstName']=$row['firstName'];
        $_SESSION['lastName']=$row['lastName'];
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid email or password!";
    }
}
?>