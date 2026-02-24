
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
        <li><a href="admin/admin_login.php">🔐 ADMIN</a></li>
        <li><a href="cart.php"> CART</a></li>
    </ul>
</nav>
    <meta charset="UTF-8">
  

<section class="brand-section">
    <h2>📱 Samsung Mobiles</h2>
    <div class="product-grid">

        <!-- Product 1 -->
        <div class="product-card">
            <img src="images/s24.jpg" alt="Samsung Galaxy S24">
            <h3>Samsung Galaxy S24</h3>
            <p>₹74,999</p>
            <a href="view.php"><button>View</button></a>
          
             <!-- Add to Cart Button -->
             <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="samsung  galaxy s24 altra">
                        <input type="hidden" name="product_price" value="74999">
                        
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
             
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <img src="images/a55.jpg" alt="Samsung Galaxy A55">
            <h3>Samsung Galaxy A55</h3>
            <p>₹39,999</p>
            <a href="samsunga55.php"><button>View</button></a>
          
            <!-- Add to Cart Button -->
            <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="2">
                        <input type="hidden" name="product_name" value="Samsung Galaxy A55">
                        <input type="hidden" name="product_price" value="39999">
                          
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>

        <!-- Product 3 -->
        <div class="product-card">
            <img src="images/m15.jpg" alt="Samsung Galaxy M15">
            <h3>Samsung Galaxy M15</h3>
            <p>₹13,499</p>
            <a href="samsungm15.php"><button>View</button></a>
           
            <!-- Add to Cart Button -->
            <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="product_name" value="Samsung Galaxy M15">
                        <input type="hidden" name="product_price" value="13499">
                       
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>
    <!-- product 4 -->
<div class="product-card">
    <img src="images/sA16.jpg" alt="Samsung Galaxy A16 5G">
    <h3>Samsung Galaxy A16 5G</h3>
    <p>₹15,999</p>
    <a href="samsungA16.php"><button>View</button></a>
    
    <!-- Add to Cart Button -->
    <form method="POST" action="cart.php">
        <input type="hidden" name="product_id" value="2">
        <input type="hidden" name="product_name" value="Samsung Galaxy A16 5G">
        <input type="hidden" name="product_price" value="15999">
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
</div>
<!-- Product 5-->
<div class="product-card">
            <img src="images/s21.jpg" alt="Samsung Galaxy S21">
            <h3>Samsung Galaxy S21</h3>
            <p>₹69999</p>
            <a href="samsungs21.php"><button>View</button></a>
            
             <!-- Add to Cart Button -->
             <form method="POST" action="cart.php">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="samsung  galaxy s24 altra">
                        <input type="hidden" name="product_price" value="74999">
                        
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
             
        </div>
        <!-- Product 6 -->
<div class="product-card">
    <img src="images/s23.jpg" alt="Samsung Galaxy S23">
    <h3>Samsung Galaxy S23</h3>
    <p>₹64,999</p>
    <a href="samsungs23.php"><button>View</button></a>
    
    <!-- Add to Cart Button -->
    <form method="POST" action="cart.php">
        <input type="hidden" name="product_id" value="6">
        <input type="hidden" name="product_name" value="Samsung Galaxy S23">
        <input type="hidden" name="product_price" value="64999">
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
</div>

<!-- Product 7 -->
<div class="product-card">
    <img src="images/m14.jpg" alt="Samsung Galaxy M14">
    <h3>Samsung Galaxy M14</h3>
    <p>₹12,999</p>
    <a href="samsungm14.php"><button>View</button></a>
    
    <form method="POST" action="cart.php">
        <input type="hidden" name="product_id" value="7">
        <input type="hidden" name="product_name" value="Samsung Galaxy M14">
        <input type="hidden" name="product_price" value="12999">
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
</div>

<!-- Product 8 -->
<div class="product-card">
    <img src="images/a35.jpg" alt="Samsung Galaxy A35">
    <h3>Samsung Galaxy A35</h3>
    <p>₹27,999</p>
    <a href="samsunga35.php"><button>View</button></a>
    
    <form method="POST" action="cart.php">
        <input type="hidden" name="product_id" value="8">
        <input type="hidden" name="product_name" value="Samsung Galaxy A35">
        <input type="hidden" name="product_price" value="27999">
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
</div>

<!-- Product 9 -->
<div class="product-card">
    <img src="images/f14.jpg" alt="Samsung Galaxy F14">
    <h3>Samsung Galaxy F14</h3>
    <p>₹10,499</p>
    <a href="samsungf14.php"><button>View</button></a>
    
    <form method="POST" action="cart.php">
        <input type="hidden" name="product_id" value="9">
        <input type="hidden" name="product_name" value="Samsung Galaxy F14">
        <input type="hidden" name="product_price" value="10499">
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
</div>

<!-- Product 10 -->
<div class="product-card">
    <img src="images/flip7.jpg" alt="Samsung Galaxy Z Flip 5">
    <h3>Samsung Galaxy Z Flip 5</h3>
    <p>₹89,999</p>
    <a href="samsungzflip5.php"><button>View</button></a>
    
    <form method="POST" action="cart.php">
        <input type="hidden" name="product_id" value="10">
        <input type="hidden" name="product_name" value="Samsung Galaxy Z Flip 5">
        <input type="hidden" name="product_price" value="89999">
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>
</div>


         </div>
</section>
</body>
</html>
