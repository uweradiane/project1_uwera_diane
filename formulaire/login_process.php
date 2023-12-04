<?php
require_once("../connections/connection.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["user_name"];
    $pwd = $_POST["pwd"];

    // Check user credentials
    $stmt = $conn->prepare("SELECT user_name, pwd FROM user WHERE user_name = ?");
    $stmt->bind_param("s", $user_name);

    if ($stmt->execute()) {
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($db_user_name, $db_pwd);
            $stmt->fetch();

            // Verify the password
            if ($pwd === $db_pwd) {
                // Save user information in the session
                $_SESSION['user_name'] = $db_user_name;

                // Redirect to the shoppingCart
                header("Location:address.php");
                exit();
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo "User not found";
        }
    } else {
        echo "Error in execution: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
