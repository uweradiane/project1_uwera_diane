<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    body {
      background-color: grey;
    }

    .signup-table {
      margin-top: 50px;
      width: 100%;
    }

    .signup-form {
      background-color: grey;
      padding: 20px;
      border-radius: 5px;
    }

    .form-title {
      text-align: center;
    }
  </style>
    <form method="POST" action="login_process.php">
        <label for="user_name">Username:</label>
        <input type="text" name="user_name" required><br>
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" required><br>
        <button type="submit">Login</button>
    </form>
    <p> don't you have any account?<a href="signup.php">Register</a></p>
</body>
</html>
<?php
// Display user information from the database

// ...

// Add edit link/button
echo "<a href='edit_user.php?user_id='id'>Edit</a>";

// Add delete form
echo "<form method='post' action='delete_user.php'>";
echo "<input type='hidden' name='user_id' value='id'>";
echo "<button type='submit'>Delete</button>";
echo "</form>";
?>





