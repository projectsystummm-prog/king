<?php
$product = [
    'name' => 'Samsung Galaxy A16 5G',
    'price' => 15999,
    'image' => 'sA16.jpg', // images folder માં આ image મુકવું
    'ram' => '4GB / 6GB',
    'rom' => '64GB / 128GB',
    'camera' => '50MP (Main) + 2MP (Depth)',
    'battery' => '5000mAh with 15W Fast Charging',
    'display' => '6.5-inch HD+ PLS LCD, 90Hz',
    'processor' => 'MediaTek Dimensity 6100 / 700',
    'os' => 'Android 13, One UI Core 5',
    'description' => 'Samsung Galaxy A16 5G એ budget-friendly 5G smartphone છે. તેની મોટી બેટરી, 90Hz display, અને reliable performance સાથે daily use અને entertainment માટે ideal choice છે.'
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
            background: #0f172a;
            margin: 0;
            padding: 0;
            color: #e2e8f0;
        }
        header {
            background-color: #111827;
            color: #38bdf8;
            padding: 20px;
            text-align: center;
            text-shadow: 0 0 8px #38bdf8;
        }
        section {
            text-align: center;
            padding: 30px;
        }
        .product-details {
            border: 1px solid #334155;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            background: #1e293b;
            box-shadow: 0 0 15px rgba(0,0,0,0.6);
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
            color: #38bdf8;
            margin-bottom: 10px;
        }
        .product-details h3 {
            text-align: center;
            color: #22c55e;
            margin-bottom: 20px;
        }
        .product-details table {
            width: 100%;
            font-size: 16px;
            margin-bottom: 15px;
            color: #e2e8f0;
        }
        .product-details table td {
            padding: 5px 10px;
        }
        .desc {
            font-size: 15px;
            color: #94a3b8;
        }
        button {
            background: linear-gradient(135deg, #38bdf8, #0ea5e9);
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            cursor: pointer;
            font-weight: bold;
            border-radius: 6px;
            transition: 0.3s;
        }
        button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px #38bdf8;
        }
        a {
            text-decoration: none;
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
