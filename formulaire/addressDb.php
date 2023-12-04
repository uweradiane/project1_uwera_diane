<?php
require_once("../formulaire/your_form_page.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom1_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $street_name = $_POST['street_name'];
    $street_nb= $_POST['street_nb'];
    $city = $_POST['city'];
    $province= $_POST['province'];
    $zip_code = $_POST['zip_code'];
    $country = $_POST['country'];

    // Insert data into the database
    $sql =("INSERT INTO address(street_name, street_nb, city,province,zip_code,country) VALUES ('$street_name', '$street_nb', '$city','$province','$zip_code','$country')");

    if ($conn->query($sql) === TRUE) {
        echo " Address added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?> 
