<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <link rel="stylesheet" href="shoppingcart.css" />

    <div class="container">
        <div class="row text-center py-5">
            <?php
            // Start a PHP session to store cart data
            session_start();

            // Check if the cart is not set, initialize it as an empty array
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            // Sample product data
            $products = [
                ['name' => 'Dress', 'price' => 59.9, 'image' => 'dress.jpeg'],
                ['name' => 'Coats', 'price' => 159.9, 'image' => 'manteau.jpeg'],
                ['name' => 'Pants', 'price' => 15.9, 'image' => 'pants.jpg'],
                ['name' => 'T_shirt', 'price' => 5.9, 'image' => 't_shirt.jpg'],
                ['name' => 'Jupe', 'price' => 9.9, 'image' => 'jupe.jpeg'],
            ];

            // Display products
            foreach ($products as $product) {
                ?>
                <div class="col-md-2 col-sm-6 my-3 my-md-0">
                    <div class="card shadow">
                        <div>
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['name']; ?></h5>
                            <p class="card-text">
                                Price: CA$<?php echo $product['price']; ?>
                            </p>
                            <form action="your_cart_page.php" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $product['name']; ?>">
                                <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                                <input type="submit" class="btn btn-warning my-3" name="add_to_cart" value="Add to Cart">
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>
