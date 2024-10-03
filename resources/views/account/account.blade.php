<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link rel="stylesheet" href="css/account.css"> <!-- Link to the CSS file -->
</head>

<?php include('view/header.php') ?>
<?php include('view/chat_window.php') ?>
<body>
<br> <br> <br> <br><br> <br>
<div class="account-container">
    <h1 class="account-title"><?php echo $_SESSION['name'] ?></h1>
    <img src="img/background/background.jpg" alt="User Avatar" class="account-avatar">
    
    <!-- Add a button to change avatar and log out -->
    <div class="avatar-actions">
    <!-- Change Avatar button (navigating to a different page) -->
    <a href="" class="avatar-button">Change Avatar</a>

    <!-- Log Out button (submitting a form to log out) -->
    <form action="account/logout.php" method="post" style="display: inline;">
        <button type="submit" class="logout-button">Log Out</button>
    </form>
</div>

    <div class="account-info">
        <label class="info-label">Name:</label>
        <p class="info-value"><?php echo $_SESSION['name'] ?></p>
    </div>
    <div class="account-info">
        <label class="info-label">Email:</label>
        <p class="info-value">johndoe@example.com</p>
    </div>
    <div class="account-info">
        <label class="info-label">Password:</label>
        <p class="info-value">********</p> 
        <a href="#" class="change-password-link">Change Password</a>
    </div>

    <div class="cart-summary">
        <p class="cart-text">You currently have <strong>3 items</strong> in your cart.</p>
        <a href="view_cart.php" class="cart-button">View Cart</a>
    </div>
</div>

</body>

<br> <br><br> <br>
<?php include('view/footer.php') ?>

</html>
