
<?php
//connection to the database
$server = "localhost";
$user = "root";
$pwd = "";
$dbname = "ecom1_project"; 

$conn = new mysqli($server, $user, $pwd, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
