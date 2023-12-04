<?php
require_once("../connections/connection.php");
require_once("../functions/function.php");
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    // Validate inputs
    $usernameValidation = usernameIsValid($user_name);
    $emailValidation = emailIsValid($email);
    $passwordValidation = passwordIsValid($pwd);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the submitted data, checking if the keys exist
        $user_name = isset($_POST["user_name"]) ? $_POST["user_name"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $password = isset($_POST["pwd"]) ? $_POST["pwd"] : "";
        $fname = isset($_POST["fname"]) ? $_POST["fname"] : "";
        $lname = isset($_POST["lname"]) ? $_POST["lname"] : "";
        $billing_address_id = isset($_POST["billing_address_id"]) ? $_POST["billing_address_id"] : 0;
        $shipping_address_id = isset($_POST["shipping_address_id"]) ? $_POST["shipping_address_id"] : 0;
        $token = isset($_POST["token"]) ? $_POST["token"] : 0;
        $role_id = isset($_POST["role_id"]) ? $_POST["role_id"] : 3;
    
    

    if (!$usernameValidation['isValid']) {
        echo $usernameValidation['msg'];
    } elseif (!$emailValidation['isValid']) {
        echo $emailValidation['msg'];
    } elseif (!$passwordValidation['isValid']) {
        echo $passwordValidation['msg'];
    } else {
        // Hash the password
        $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

        // Insert data into the database
        $sql = "INSERT INTO user(user_name, email, pwd, fname, lname, billing_address_id, shipping_address_id, token, role_id) 
        VALUES ('$user_name', '$email', '$password', '$fname', '$lname', $billing_address_id, $shipping_address_id, $token, 3)";

// $conn is your database connection)
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
}
}
}
?>
<?php
?>
<?php
