<?php
require_once("../functions/result.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: black;
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
  <title>Signup Form</title>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <table class="table signup-table">
        <tbody>
          <tr>
            <td class="col-md-3"></td>
            <td class="col-md-6 signup-form">
              <form method="post" action="../connections/register.php">
                <h2 class="form-title">Sign Up</h2>
                <div class="form-group">
                  <label for="user_name">Username</label>
                  <input type="text" class="form-control" id="username" name="user_name" placeholder="Enter your username">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="pwd" placeholder="Enter your password">
                </div>
                <div class="form-group">
                  <label for="FirstName">FirstName</label>
                  <input type="fname" class="form-control" id="fname" name="fname" placeholder="Enter your Firstname">
                </div>
                <div class="form-group">
                  <label for="lname">LastName</label>
                  <input type="lname" class="form-control" id="lname"name="lname" placeholder="Enter your LastName">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
              </form>
            </td>
            <td class="col-md-3"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

