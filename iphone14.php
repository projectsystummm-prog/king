<?php
$product = [
    'name' => 'iPhone 14',
    'price' => 69900,
    'image' => 'i14.jpg', // Make sure to save this image in your 'images' folder
    'ram' => '6GB',
    'rom' => '128GB / 256GB / 512GB',
    'camera' => '12MP (Main) + 12MP (Ultra-Wide)',
    'battery' => '3279mAh, Fast Charging + MagSafe Wireless Charging',
    'display' => '6.1-inch Super Retina XDR OLED, 60Hz',
    'processor' => 'Apple A15 Bionic chip',
    'os' => 'iOS 16 (upgradable)',
    'description' => 'The iPhone 14 delivers powerful performance with the A15 Bionic chip, improved cameras, and reliable battery life. A sleek, durable design and smooth user experience make it a strong choice in Apple’s lineup.'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $product['name']; ?> - Details</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial;
            background: #fffef5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #111;
            color: white;
            padding: 20px;
            text-align: center;
        }
        section {
            text-align: center;
            padding: 30px;
        }
        .product-details {
            border: 1px solid #ddd;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            background: black;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: left;
        }
        .product-details img {
            width: 250px;
            border-radius: 10px;
            display: block;
            margin: 0 auto 20px;
        }
        .product-details h2 {
            text-align: center;
            color: white;
        }
        .product-details table {
            width: 100%;
            font-size: 16px;
            margin-bottom: 15px;
            color: white;
        }
        .product-details table td {
            padding: 5px 10px;
        }
        .desc {
            font-size: 15px;
            color: #ccc;
        }
        button {
            background: orange;
            color: black;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background: darkorange;
        }
    </style>
</head>
<body>

<header>
    <h1>📱 <?php echo $product['name']; ?> Details</h1>
</header>

<section>
    <div class="product-details">
        <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h2><?php echo $product['name']; ?></h2>
        <h3>Price: ₹<?php echo number_format($product['price']); ?></h3>

        <table>
            <tr><td><strong>RAM:</strong></td><td><?php echo $product['ram']; ?></td></tr>
            <tr><td><strong>Storage:</strong></td><td><?php echo $product['rom']; ?></td></tr>
            <tr><td><strong>Camera:</strong></td><td><?php echo $product['camera']; ?></td></tr>
            <tr><td><strong>Battery:</strong></td><td><?php echo $product['battery']; ?></td></tr>
            <tr><td><strong>Display:</strong></td><td><?php echo $product['display']; ?></td></tr>
            <tr><td><strong>Processor:</strong></td><td><?php echo $product['processor']; ?></td></tr>
            <tr><td><strong>Operating System:</strong></td><td><?php echo $product['os']; ?></td></tr>
        </table>

        <p class="desc"><?php echo $product['description']; ?></p>
        <a href="index.php"><button>⬅ Back to Home</button></a>
    </div>
</section>

</body>
</html>
