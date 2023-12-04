<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
<?php
require_once("../functions/function.php");
var_dump($_POST);
if($_POST){
    $user_name = $_POST['user_name'];
    $email = $_POST['pwd'];
    $pwd= $_POST['pwd'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $billing_adress_id = $_POST['lname'];

    if (empty($fname)){
        echo "</br> firstname is empty";}
    if (empty($lname)){
        echo "</br> lastname is empty";
    }
    if (empty($user_name)){
        echo "</br> username is empty";}
    if (empty($pwd)){
        echo "</br> password is empty";}
    if (empty($email)){
         echo "</br> email is empty";}
    else{
        echo "<br> My username:  " . $user_name;
        echo "<br> My email:  " . $email;
        echo "<br> My password:  " . $pwd;
        echo "<br> My fname:  " . $fname;
        echo "<br> My lname:  " . $lname;
    }
    $nameLengthIsValid = nameLengthIsvalid($_POST['pwd']);
    echo '</br>';
    var_dump($nameLengthIsValid);
    if(!$nameLengthIsValid['isValid']){
        //on fait note traitement
        echo '</br>';
        $saltedName = addSalt($_POST['pwd']);
        var_dump($saltedName);
        $encodeName = encodeName($saltedName);
        echo '</br>';
    }
};
    
?>