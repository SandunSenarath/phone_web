<!--<?php
$host = 'localhost';
$user = 'root'; // Replace with your MySQL username
$password = ''; // Replace with your MySQL password
$dbname = 'furniture_shop';

// Connect to database
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add product
if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (name, category, price) VALUES ('$name', '$category', '$price')";
    $conn->query($sql);
}

// Delete product
if (isset($_GET['delete_product'])) {
    $id = $_GET['delete_product'];
    $conn->query("DELETE FROM products WHERE id=$id");
}

// Fetch products
$products = $conn->query("SELECT * FROM products");

// Fetch orders
$orders = $conn->query("SELECT * FROM orders");
?>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/adminpanel.css">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .form-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Furniture Shop Admin Panel</h1>

    <h2>Manage Products</h2>
    <div class="form-container">
        <form method="POST">
            <input type="text" name="name" placeholder="Product Name" required>
            <input type="text" name="category" placeholder="Category" required>
            <input type="number" step="0.01" name="price" placeholder="Price" required>
            <button type="submit" name="add_product">Add Product</button>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $products->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['category'] ?></td>
                    <td>$<?= $row['price'] ?></td>
                    <td>
                        <a href="?delete_product=<?= $row['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Manage Orders</h2>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Status</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $orders->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['customer'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td>$<?= $row['total'] ?></td>
                    <td>
                        <a href="#">View</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>