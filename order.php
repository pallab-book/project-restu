<?php
// 1. Database connection info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant_db"; // তোমার ডাটাবেজের নাম, চাইলে বদলাও

// 2. Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// 3. Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// 4. Get form data
$customer_name = $_POST['customer_name'];
$phone = $_POST['phone'];
$menu_item = $_POST['menu_item'];
$address = $_POST['address'];

// 5. Insert into 'orders' table
$sql = "INSERT INTO orders (customer_name, phone, menu_item, address, order_date)
        VALUES ('$customer_name', '$phone', '$menu_item', '$address', NOW())";

// 6. Check if successful
if ($conn->query($sql) === TRUE) {
  echo "<h2>✅ অর্ডার সফলভাবে নেওয়া হয়েছে!</h2>";
  echo "<a href='index.html'>Back to Home</a>";
} else {
  echo "❌ অর্ডার নেওয়া যায়নি: " . $conn->error;
}

$conn->close();
?>