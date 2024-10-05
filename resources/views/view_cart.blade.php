<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

    <!-- Update CSS link with asset helper -->
    <link rel="stylesheet" href="{{ asset('frontend/css/view_cart.css') }}"> <!-- Link to the CSS file -->
</head>

<!-- Include header and chat window -->
@include('header_footer.header')
@include('chat.chat_window')

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
                        <!-- Update img src with asset helper -->
                        <img src="{{ asset('frontend/img/background/background.jpg') }}" alt="Product Image">
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
                        <!-- Update img src with asset helper -->
                        <img src="{{ asset('frontend/img/background/background.jpg') }}" alt="Product Image">
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

<!-- Include footer -->
@include('header_footer.footer')

</html>
