
<?php include 'admin/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vishal Royal Mobile Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>👑Royal Mobile Shop</h1>
    <p>Luxury Collection of Premium Smartphones</p>
</header>

<!-- 🌟 Navigation Menu -->
<nav>
    <ul>
        <li><a href="index.php">🏠 Home</a></li>
        <li><a href="products.php">📱 Products</a></li>
        <li><a href="contact.php">📞 Contact</a></li>
        <li><a href="login.php">🔐 Admin</a></li>
        <li><a href="cart.php"> CART</a></li>
    </ul>
</nav>

<section class="brand-section">
    <h2>🍎 Apple iPhones</h2>
    <div class="product-grid">
        <div class="product-card">
            <img src="images/i15.jpg" alt="iPhone 15 Pro Max">
            <h3>iPhone 15 Pro Max</h3>
           
            <p>₹1,59,900</p>
            <a href="iphone15.php"><button>View</button></a>
            <a href="order.php"><button>order</button></a>
                        <!-- Add to Cart Button -->
                        <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="iPhone 15 Pro Max">
                        <input type="hidden" name="product_price" value="159900">
                        
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
        </div>
        <div class="product-card">
            <img src="images/i14.jpg" alt="iPhone 14">
            <h3>iPhone 14</h3>
            <p>₹69,999</p>
            <a href="iphone15.php"><button>View</button></a>
            <a href="order.php"><button>order</button></a>
           <!-- Add to Cart Button -->
                        <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="2">
                        <input type="hidden" name="product_name" value="iPhone 14">
                        <input type="hidden" name="product_price" value="69999">
                        
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
        </div>
        <div class="product-card">
            <img src="images/ise.jpg" alt="iPhone SE (2022)">
            <h3>iPhone SE </h3>
           
            <p>₹49,900</p>
            <a href="iphonese.php"><button>View</button></a>
            <a href="order.php"><button>order</button></a>
           <!-- Add to Cart Button -->
                        <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="product_name" value="iPhone SE (2022)">
                        <input type="hidden" name="product_price" value="49900">
                        
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
        </div>
    </div>
</section>

</body>
</html>
