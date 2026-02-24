<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

    <div class="container">
        <h2>Contact Us</h2>
        <form action="send_contact.php" method="post">
            
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" required>
            </div>

            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea name="message" id="message" rows="5" required></textarea>
            </div>

            <button type="submit">Send Message</button>
        </form>
    </div>

</body>
</html>
