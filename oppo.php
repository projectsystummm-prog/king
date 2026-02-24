
<?php include 'admin/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vishal Royal Mobile Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>👑 Royal Mobile Shop</h1>
    <p>Luxury Collection of Premium Smartphones</p>
</header>

<!-- 🌟 Navigation Menu -->
<nav>
    <ul>
        <li><a href="index.php">🏠 Home</a></li>
        <li><a href="products.php">📱 Products</a></li>
        <li><a href="contact.php">📞 Contact</a></li>
        <li><a href="admin/login.php">🔐 Admin</a></li>
        <li><a href="cart.php"> CART</a></li>
    </ul>
</nav>

<section class="brand-section">
    <h2>📱 Oppo Mobiles</h2>
    <div class="product-grid">
        <div class="product-card">
            <img src="images/reno.jpg" alt="Oppo Reno11 Pro">
            <h3>Oppo Reno11 Pro</h3>
           
            <p>₹39,999</p>
            <a href="opporeno.php"><button>View</button></a>
            <a href="order.php"><button>order</button></a>
            <!-- Add to Cart Button -->
            <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Oppo Reno11 Pro">
                        <input type="hidden" name="product_price" value="39999">

                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
        </div>
        <div class="product-card">
            <img src="images/f25.jpg" alt="Oppo F25 Pro">
            <h3>Oppo F25 Pro</h3>
            <p>₹23,999</p>
            <a href="oppof25.php"><button>View</button></a>
            <a href="order.php"><button>order</button></a>
            <!-- Add to Cart Button -->
            <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Oppo F25 Pro">
                        <input type="hidden" name="product_price" value="23999">
                        
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
        </div>
        <div class="product-card">
            <img src="images/a59.jpg" alt="Oppo A59 5G">
            <h3>Oppo A59 5G</h3>
            <p>₹12,999</p>
            <a href="opporeno.php"><button>View</button></a>
            <a href="order.php"><button>order</button></a>
            <!-- Add to Cart Button -->
            <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Oppo A59 5G">
                        <input type="hidden" name="product_price" value="12999">
                        
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
        </div>
    </div>
</section>

</body>
</html>
