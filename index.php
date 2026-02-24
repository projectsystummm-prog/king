<?php include 'admin/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Royal Mobile Shop</title>
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
        <li><a href="index.php">🏠 HOME</a></li>
        <li><a href="products.php">📱 PRODUCT</a></li>
        <li><a href="contact.php">📞 CONTACT</a></li>
        <li><a href="admin/admin_login.php">🔐 ADMIN</a></li>
        <li><a href="cart.php"> CART</a></li>
        <li><a href="login/login.php">login</a></li>
    </ul>
</nav>

<!-- 🌟 Hero Section with Image -->
<section class="hero">
    <img src="images/royal.png" alt="Royal Mobile Shop" style="width:70%; border-radius:15px; box-shadow:0 4px 15px rgba(0,0,0,0.1);">
</section>


</section>
<!-- ⭐ FEATURED PRODUCTS SECTION -->

<section class="featured-products">
    <h2>🔥 Featured Products</h2>
    <div class="product-grid">
        <div class="product-card">
            <img src="images/s24.jpg" alt="Samsung Galaxy" />
            <h3>Samsung Galaxy S24</h3>
            </button
</a>
            <p>₹74,999</p>
            <a href="samsung.php"><button>View</button></a>
        </div>
        <div class="product-card">
            <img src="images/reno11.jpg" alt="Oppo Reno" />
            <h3>Oppo Reno 11</h3>
            <p>₹29,999</p>
            <a href="oppo.php"><button>View</button></a>
        </div>
        <div class="product-card">
        <img src="images/vivov29.jpg" alt="Vivo V29 Pro" />
            <h3>Vivo V29 Pro</h3>
            <p>₹34,499</p>
            <a href="vivo.php"><button>View</button></a>
        </div>
        <div class="product-card">
            <img src="images/i15.jpg" alt="iPhone 15 Pro Max" />
            <h3>iPhone 15 Pro Max</h3>
            <p>₹1,59,900</p>
            <a href="iphone.php"><button>View</button></a>
        </div>
    </div>
</section>

    </div>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?>  Royal Mobile Shop. All rights reserved.</p>
</footer>

</body>
</html>
