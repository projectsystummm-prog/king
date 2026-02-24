<?php
include 'admin/db.php';

if (isset($_POST['place_order'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $payment_method = $_POST['payment_method'];

    $sql = "INSERT INTO orders (name, address, phone, payment_method) 
            VALUES ('$name', '$address', '$phone', '$payment_method')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Order placed successfully!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Place Order</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <div class="order-container">
        <h2>Place Your Order</h2>
        <form method="POST" action="">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Address:</label>
            <textarea name="address" required></textarea>

            <label>Phone:</label>
            <input type="text" name="phone" required>

            <label>Payment Method:</label>
            <select name="payment_method">
                <option value="Cash on Delivery">Cash on Delivery</option>
            </select>

            <button type="submit" name="place_order">Place Order</button>
        </form>
    </div>
</body>
</html>
