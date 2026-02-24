<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Royal Mobile Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>👑  Royal Mobile Shop</h1>
    <p>Luxury Collection of Premium Smartphones</p>
</header>

<!-- 🌟 Navigation Menu -->
<nav>
    <ul>
        <li><a href="index.php">🏠 Home</a></li>
        <li><a href="products.php">📱 Products</a></li>
        <li><a href="contact.php">📞 Contact</a></li>
        <li><a href="admin/admin_login.php">🔐 ADMIN</a></li>
        <li><a href="cart.php"> CART</a></li>
    </ul>
</nav>

<!-- 🌟 Hero Section with Image -->
<section class="hero">
    <img src="images/royal.png" alt=" Royal Mobile Shop" style="width:70%; border-radius:15px; box-shadow:0 4px 15px rgba(0,0,0,0.1);">
</section>

<!-- 🔘 Brand Buttons -->
<section class="brand-buttons" style="text-align:center; margin-top:30px;">
    <a href="samsung.php"><button>Samsung</button></a>
    <a href="oppo.php"><button>Oppo</button></a>
    <a href="vivo.php"><button>Vivo</button></a>
    <a href="iphone.php"><button>iPhone</button></a>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Vishal Royal Mobile Shop. All rights reserved.</p>
</footer>

</body>
</html>
