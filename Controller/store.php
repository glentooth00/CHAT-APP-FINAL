<?php 
session_start();
echo $username = $_POST['username'];
echo $password = $_POST['password'];
echo $firstname = $_POST['firstname'];
echo $lastname = $_POST['lastname'];
echo $gender = $_POST['gender'];

if(!$username){
   
    $_SESSION['no-username'] = 'Please provide username';
    header("location:../login.php");
}

if(!$password){
    $_SESSION['no-password'] = 'Please provide password';
    header("location:../login.php");
}

if(!$firstname){
    $_SESSION['no-firstname'] = 'Please provide Firstname';
    header("location:../login.php");
}

if(!$lastname){
    $_SESSION['no-lastname'] = 'Please provide lastname';
    header("location:../login.php");
}

if(!$gender){
    $_SESSION['no-gender'] = 'Please provide gender';
    header("location:../login.php");
}