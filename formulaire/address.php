<?php
require_once("../formulaire/address.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Add Item</title>
  </head>
  <body>
    <div class="container">
      <h2>Address</h2>
      <form action="addressDb.php" method="post">
        <label for="street_name">street_name:</label>
        <input type="text" id="street_name" name="street_name" required /><br>

        <label for="street_nb">street_nb:</label>
        <textarea id="text" name="street_nb"></textarea><br>

        <label for="city">city:</label>
        <input type="text" id="city" name="city" required /><br>
        <label for="province">province:</label>
        <input type="province" id="province" name="province" required /><br>
        <label for="zip_code">zip_code:</label>
        <input type="text" id="zip_code" name="zip_code" required /><br>
        <label for="country">country:</label>
        <input type="text" id="country" name="country" required /><br>

        <button type="submit">Save</button>
      </form>
    </div>
  </body>
</html>
