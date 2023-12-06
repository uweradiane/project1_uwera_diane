<?php
function connect(){
    $mysqli = new mysqli(server,username,password,database);
    if($mysqli->connect_error!=0){
        $error = $mysqli_error;
        $error_date = date("F j,y g:i a");
        $message ="{$error} |{$error_date}\r\n";
        file_put_c
    }
}
function registeruser(){}
function loginuser(){}
function logoutuser(){}
function passwordReset(){}
function delteAccount(){}






?>