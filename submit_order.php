<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "restaurent_db";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['customer_name'];
$phone = $_POST['phone'];
$item = $_POST['item'];
$address = $_POST['address'];

$sql = "INSERT INTO orders (customer_id, order_date, total_amount)
        VALUES (1, NOW(), 500)";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>