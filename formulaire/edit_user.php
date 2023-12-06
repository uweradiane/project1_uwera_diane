<?php
require_once("../connections/connection.php");

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Check if the form is submitted for updating
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        // Update user information in the database
        $update_sql = "UPDATE `user` SET `name` = ?, `email` = ? WHERE `user_id` = ?";
        $update_stmt = $conn->prepare($update_sql);

        if ($update_stmt === false) {
            die("Error: " . $conn->error);
        }

        // Bind parameters and execute the update query
        $update_stmt->bind_param("ssi", $user_name, $email, $user_id);
        $update_result = $update_stmt->execute();

        if ($update_result === false) {
            die("Error updating user: " . $update_stmt->error);
        }

        echo "User updated successfully!";
    }

    // Fetch user data from the database for pre-filling the form
    $select_sql = "SELECT * FROM `user` WHERE `id` = ?";
    $select_stmt = $conn->prepare($select_sql);

    if ($select_stmt === false) {
        die("Error: " . $conn->error);
    }

    $select_stmt->bind_param("i", $id);
    $select_stmt->execute();

    $result = $select_stmt->get_result();

    if ($result === false) {
        die("Error fetching user data: " . $select_stmt->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Display edit form with existing user information
        echo "<form method='post' action=''>";
        echo "<input type='hidden' name='user_id' value='{$row['user_id']}'>";
        echo "Username: <input type='text' name='user_name' value='{$row['user_name']}'><br>";
        echo "Email: <input type='text' name='email' value='{$row['email']}'><br>";
        // Add other input fields as needed
        echo "<button type='submit'>Update</button>";
        echo "</form>";
    } else {
        echo "User not found.";
    }

    // Close the statement
    $select_stmt->close();
}

// Close the connection
$conn->close();
?>
