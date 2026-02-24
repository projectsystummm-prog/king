
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
    <h2>📱 Vivo Mobiles</h2>
    <div class="product-grid">
        <div class="product-card">
            <img src="images/v29.jpg" alt="Vivo V29 Pro">
            <h3>Vivo V29 Pro</h3>
            <p>₹39,999</p>
            <a href="vivov29.php"><button>View</button></a>
            <a href="order.php"><button>order</button></a>
            <!-- Add to Cart Button -->
            <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Vivo V29 Pro">
                        <input type="hidden" name="product_price" value="39999">
                       
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
        </div>
        <div class="product-card">
            <img src="images/y200.jpg" alt="Vivo Y200">
            <h3>Vivo Y200</h3>
            <p>₹21,499</p>
            <a href="vivoy200.php"><button>View</button></a>
            <a href="order.php"><button>order</button></a>
             <!-- Add to Cart Button -->
            <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="2">
                        <input type="hidden" name="product_name" value="Vivo Y200">
                        <input type="hidden" name="product_price" value="21499">
                        
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
        </div>
        <div class="product-card">
            <img src="images/t3.jpg" alt="Vivo T3 5G">
            <h3>Vivo T3 5G</h3>
            <p>₹19,999</p>
            <a href="vivot3.php"><button>View</button></a>
            <a href="order.php"><button>order</button></a>
            <!-- Add to Cart Button -->
            <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="product_name" value="Vivo T3 5G">
                        <input type="hidden" name="product_price" value="19999">
                        
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
        </div>
    </div>
</section>

</body>
</html>
