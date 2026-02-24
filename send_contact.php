<?php
include "admin/db.php"; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Response</title>
    <link rel="stylesheet" href="send_contact.css">
</head>
<body>
<div class="response-box">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, phone, message) 
            VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>✔ Thank you! Your message has been sent.</h2>";
        echo "<a href='index.php'>⬅ Back to home Page</a>";
    } else {
        echo "<div class='error'>❌ Error: " . $conn->error . "</div>";
        echo "<a href='index.php'>⬅ Back to home Page</a>";
    }
}
?>
</div>
</body>
</html>
