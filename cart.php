<?php
include 'admin/db.php';

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Insert into cart
    $sql = "INSERT INTO cart (product_id, product_name, product_price) 
            VALUES ('$product_id', '$product_name', '$product_price')";
    mysqli_query($conn, $sql);

    echo "<script>alert('Product added to cart!'); window.location.href='cart.php';</script>";
}

// Fetch cart items
$result = mysqli_query($conn, "SELECT * FROM cart");
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
    <style>
        .checkout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: cyan;
            color: black;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            transition: 0.3s;
        }
        .checkout-btn:hover {
            background: #00bcd4;
            color: white;
        }
        .back-link {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="cart-container">
        <h2>🛒 My Cart</h2>
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['product_name']; ?></td>
                    <td class="price">₹<?php echo number_format($row['product_price']); ?></td>
                </tr>
            <?php } ?>
        </table>

        <!-- Checkout Button -->
        <a href="checkout.php" class="checkout-btn">Proceed to Checkout</a>

        <!-- Back to Home -->
        <div class="back-link">
            <a href="index.php">⬅ Back to home page</a>
        </div>
    </div>
</body>
</html>
