<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom1_project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize the cart array in the session if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Function to add a product to the cart
function addToCart($productId, $quantity) {
    global $conn;

    // Check if the product is already in the cart
    $checkQuery = "SELECT * FROM product WHERE id = $productId";
    $result = $conn->query($checkQuery);

    if (!$result) {
        die("Error in query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // Product is already in the cart, update the quantity
        $_SESSION['cart'][$productId] += $quantity;
    } else {
        // Product is not in the cart, insert a new record
        $_SESSION['cart'][$productId] = $quantity;
    }
}

// Function to remove a product from the cart
function removeFromCart($productId) {
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
    }
}

// Example usage
$message = ""; // Initialize the message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $productIdToAdd = isset($_POST['productId']) ? $_POST['productId'] : null;

        if ($productIdToAdd !== null) {
            $quantityToAdd = 1; // You may modify this based on your needs
            addToCart($productIdToAdd, $quantityToAdd);
            $message = "Product added to the cart.";
        } else {
            $message = "Product ID is missing in the form submission.";
        }
    } elseif (isset($_POST['remove'])) {
        $productIdToRemove = isset($_POST['productId']) ? $_POST['productId'] : null;

        if ($productIdToRemove !== null) {
            removeFromCart($productIdToRemove);
            $message = "Product removed from the cart.";
        } else {
            $message = "Product ID is missing in the form submission.";
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your stylesheets and scripts here -->
</head>
<body>

    <!-- Your HTML product forms with modifications -->
    <!-- Include the productId as a hidden input -->
    <form action="your_form_page.php" method="post">
        <!-- Other form fields... -->
        <input type="hidden" name="id" value="1"> <!-- Change this to the actual product ID -->
        <button type="submit" class="btn btn-warning my-3" name="add"> Add to Cart <i class="fas fa-shopping-cart"></i></button>
    </form>

    <!-- Display a message if set -->
    <?php if (!empty($message)) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
    <?php } ?>

</body>
</html>
