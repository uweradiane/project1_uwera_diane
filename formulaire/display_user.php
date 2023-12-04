<?php
require_once("connection.php");

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    
    // Fetch user data from the database
    $sql = "SELECT * FROM user WHERE user_id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['user_id'];

        // Display user information
        echo "User ID: $id <br>";
        echo "Username: " . $row['user_name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";

        // Add edit link/button
        echo "<a href='edit_user.php?user_id=$id'>Edit</a>";

        // Add delete form
        echo "<form method='post' action='delete_user.php'>";
        echo "<input type='hidden' name='user_id' value='$id'>";
        echo "<button type='submit'>Delete</button>";
        echo "</form>";
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>
