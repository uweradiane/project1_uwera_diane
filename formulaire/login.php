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
      margin:50px 0px;
      padding:0px;
      text-align:center;
      align:center;
      background-repeat:no-repeat;
      background-size:cover;
      background-image:url("IMG.jpg");
    }

    label,input{
      display:block;
      width:150px;
      float:left;
      margin-bottom:10px;
    }
    label{
      text-align:right;
      width:95px;
      padding-right:20;
    }

    br {
      clear:left;
    }
    form{
      display:inline-block;
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





