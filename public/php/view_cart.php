<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/view_cart.css"> <!-- Link to the CSS file -->
</head>
<?php
        include("view/header.php");
    ?>
<?php include('view/chat_window.php') ?>
<body>
<br> <br> <br> <br> <br> <br>
<div class="cart-container">
    <h1 class="cart-title">Shopping Cart</h1>

    <table class="cart-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Product Row -->
            <tr>
                <td class="product">
                    <img src="img/background.jpg" alt="Product Image">
                    <span>Product Name 1</span>
                </td>
                <td>$20.00</td>
                <td>
                    <input type="number" value="1" min="1" class="quantity-input">
                </td>
                <td>$20.00</td>
                <td><button class="remove-btn">Remove</button></td>
            </tr>
            <tr>
                <td class="product">
                    <img src="img/background.jpg" alt="Product Image">
                    <span>Product Name 2</span>
                </td>
                <td>$15.00</td>
                <td>
                    <input type="number" value="2" min="1" class="quantity-input">
                </td>
                <td>$30.00</td>
                <td><button class="remove-btn">Remove</button></td>
            </tr>
            <!-- Add more product rows here -->
        </tbody>
    </table>

    <div class="cart-summary">
        <p>Subtotal: <span>$50.00</span></p>
        <p>Tax: <span>$5.00</span></p>
        <p>Total: <strong>$55.00</strong></p>
        <button class="checkout-btn">Proceed to Checkout</button>
    </div>
</div>

</body>
<br> <br> <br>
<?php
        include("view/footer.php");
    ?>
</html>
