<?php
include 'admin/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "<h2>Product Not Found</h2>";
        exit;
    }
} else {
    echo "<h2>Invalid Request</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $product['name'] ?> - Product Details</title>
    <style>
        body {
            font-family: Arial;
            background: #f8f8f8;
            padding: 40px;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            display: flex;
            padding: 30px;
            gap: 40px;
        }
        img {
            max-width: 300px;
            border-radius: 10px;
        }
        .details {
            flex: 1;
        }
        h1 {
            margin: 0 0 10px;
        }
        .price {
            color: #d48806;
            font-size: 24px;
            margin-bottom: 15px;
        }
        .description {
            font-size: 16px;
            color: #444;
        }
        .back {
            margin-top: 30px;
        }
        .back a {
            background: #ffcc00;
            padding: 10px 20px;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
        <div class="details">
            <h1><?= $product['name'] ?></h1>
            <div class="price">₹<?= number_format($product['price']) ?></div>
            <div class="description"><?= $product['description'] ?></div>

            <div class="back">
                <a href="index.php">⬅️ Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
