<?php
include 'admin/db.php';

if (isset($_POST['place_order'])) {
    $name     = mysqli_real_escape_string($conn, $_POST['name']);
    $address  = mysqli_real_escape_string($conn, $_POST['address']);
    $phone    = mysqli_real_escape_string($conn, $_POST['phone']);
    $payment  = mysqli_real_escape_string($conn, $_POST['payment']);
    $quantity = (int) $_POST['quantity']; // New quantity input

    // Fetch cart items
    $cart_items = mysqli_query($conn, "SELECT * FROM cart");
    $order_details = "";
    $total_price = 0;

    while ($row = mysqli_fetch_assoc($cart_items)) {
        $product_name  = $row['product_name'];
        $product_price = $row['product_price'];

        // user entered quantity override
        $subtotal = $product_price * $quantity;
        $order_details .= $product_name . " (₹" . $product_price . " x " . $quantity . " = ₹" . $subtotal . "), ";
        $total_price  += $subtotal;
    }

    if ($order_details == "") {
        echo "<script>alert('⚠️ Your cart is empty!'); window.location='cart.php';</script>";
        exit;
    }

    // Insert into orders table
    $sql = "INSERT INTO orders (name, address, phone, payment_method, order_details, total_price) 
            VALUES ('$name', '$address', '$phone', '$payment', '$order_details', '$total_price')";

    if (mysqli_query($conn, $sql)) {
        // Empty the cart
        mysqli_query($conn, "TRUNCATE TABLE cart");
        echo "<script>alert('✅ Order placed successfully!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
    <div class="checkout-box">
        <h2>Checkout</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Enter Full Name" required>
            <textarea name="address" placeholder="Enter Address" required></textarea>
            <input type="text" name="phone" placeholder="Enter Phone Number" required>

            <!-- New Quantity Field -->
            <input type="number" name="quantity" placeholder="Enter Quantity" min="1" value="1" required>

            <select name="payment" required>
                <option value="">-- Select Payment Method --</option>
                <option value="Cash on Delivery">Cash on Delivery</option>
            </select>

            <button type="submit" name="place_order">Place Order</button>
        </form>
    </div>
</body>
</html>
