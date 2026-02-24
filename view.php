<?php
$product = [
    'name' => 'Samsung Galaxy S24',
    'price' => 74999,
    'image' => 's24.jpg',
    'ram' => '12GB',
    'rom' => '256GB',
    'camera' => '50MP + 12MP + 10MP',
    'battery' => '4000mAh',
    'display' => '6.2-inch Dynamic AMOLED 2X',
    'processor' => 'Snapdragon 8 Gen 3',
    'os' => 'Android 14',
    'description' => 'Samsung Galaxy S24 is a flagship phone with premium design and top-tier performance.'
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
        }
        .product-details table {
            width: 100%;
            font-size: 16px;
            margin-bottom: 15px;
        }
        .product-details table td {
            padding: 5px 10px;
        }
        .desc {
            font-size: 15px;
            color: #333;
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

