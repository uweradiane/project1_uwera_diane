<?php
require_once("../connections/connection.php");

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Fetch user data from the database
    $sql = "SELECT * FROM user WHERE user_id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['user_id'];

        // Display edit form with existing user information
        // Add your HTML form here
        echo "<form method='post' action='update_user.php'>";
        echo "<input type='hidden' name='user_id' value='$id'>";
        echo "Username: <input type='text' name='user_name' value='" . $row['user_name'] . "'><br>";
        echo "Email: <input type='text' name='email' value='" . $row['email'] . "'><br>";
        // Add other input fields as needed
        echo "<button type='submit'>Update</button>";
        echo "</form>";
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>
